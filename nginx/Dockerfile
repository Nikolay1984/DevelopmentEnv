FROM nginx:alpine
RUN apk update; \
    apk upgrade;
# Copy apache vhost file to proxy php requests to php-fpm container
COPY demo.nginx.conf /etc/nginx/demo.nginx.conf
RUN echo "Include /etc/nginx/demo.nginx.conf" \
    >> /etc/nginx/nginx.conf