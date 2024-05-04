server {
        listen 80;
        listen [::]:80;

        root /var/www/example_1.com/html;
        index index.html index.htm index.nginx-debian.html;

        server_name example_1.com www.example_1.com;

        location / {
                try_files $uri $uri/ =404;
        }
}
