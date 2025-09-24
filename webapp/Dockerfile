FROM php:7.4-apache

# Copy your code into Apache's web root
COPY . /var/www/html/

# Set DirectoryIndex to practice4.php so it's the default page
RUN echo "DirectoryIndex practice4.php" > /var/www/html/.htaccess

# Expose the web port
EXPOSE 80
