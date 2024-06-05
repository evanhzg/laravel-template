#!/bin/bash

# Load the .env file
export $(grep -v '^#' .env | xargs)

# Check which shell is in use
if [ "$SHELL" = *"bash"* ]; then
    if [ "$OSTYPE" = "darwin"* ]; then
        # MacOS uses .bash_profile instead of .bashrc
        shell_config="$HOME/.bash_profile"
    else
        shell_config="$HOME/.bashrc"
    fi
elif [ "$SHELL" = *"zsh"* ]; then
    shell_config="$HOME/.zshrc"
else
    echo "Unsupported shell. Please add the following line manually to your shell configuration:"
    echo $alias_command
fi

# Run composer install and npm install
echo "Running composer install..."
composer install

echo "Running npm install..."
npm install

# Copy the .env.example file to .env if it does not exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Ask the user for a custom local URL, default to contemplates.app
read -p "Enter a custom local URL (default: contemplates.test): " app_url
app_url=${app_url:-contemplates.test}

# Add entry to /etc/hosts
if grep -q "$app_url" /etc/hosts; then
    # If it's already there, print a message
    echo "$app_url already exists in the hosts file."
else
    # If it's not, add it
    echo "127.0.0.1 $app_url" | sudo tee -a /etc/hosts
fi
# Rest of your script...


# Update APP_URL and port in .env file
sed -i.bak "s|^APP_URL=.*|APP_URL=http://${app_url}:8888|" .env
sed -i.bak "s|^APP_PORT=.*|APP_PORT=8888|" .env
rm .env.bak

# Ask the user for a custom Docker container name, default to contemplates-container
read -p "Enter a custom Docker container name (default: contemplates-container): " container_name
container_name=${container_name:-contemplates-container}

# Update the container name and port in the docker-compose.yml file
sed -i.bak "s|laravel-template-mysql-1|${container_name}-mysql|" docker-compose.yml
sed -i.bak "s|laravel-template-laravel.test-1|${container_name}.test|" docker-compose.yml
rm docker-compose.yml.bak

# Update hosts file to point the app_url to 127.0.0.1
echo "127.0.0.1 ${app_url}" | sudo tee -a /etc/hosts

# Print the URL of the local environment
echo "Your local environment is set up at ${APP_URL}"
