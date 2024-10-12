################################
# STEP 4 build for website
################################
ARG ALPINE_VERSION=3.16
FROM alpine:3.16 AS website
LABEL Maintainer="Onojeta Brown <onosbrown.save@gmail.com>"
LABEL Description="Lightweight container with Nginx 1.22 & PHP 8.1 based on Alpine Linux."

# Setup document root
WORKDIR /var/www/html

# Install packages and remove default server definition
RUN apk add --no-cache \
    ca-certificates \
    curl \
    nginx \
    php81-fpm \
    php81-session \
    php81-opcache \
    supervisor

RUN ln -s /usr/bin/php81 /usr/bin/php
RUN addgroup -g 1000 lla && adduser -u 1000 -G lla -D lla

COPY config/nginx.conf /etc/nginx/nginx.conf
COPY config/fpm-pool.ini /etc/php81/php-fpm.d/www.conf
COPY config/php.ini /etc/php81/conf.d/custom.ini
COPY config/supervisord.ini /etc/supervisor.d/supervisord.ini
COPY --chown=lla ./ ./website

RUN chown -R lla.lla /var/www/html /run /var/lib/nginx /var/log/nginx
RUN chown -R lla:lla .

RUN find . -type f -exec chmod 644 {} \;
RUN find . -type d -exec chmod 755 {} \;

USER lla

# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor.d/supervisord.ini"]