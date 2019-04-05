ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.2-fpm
RUN \ 
    apk update && \
    apk add libldap && \
    apk add openldap-dev && \
    apk add php7-ldap 

RUN \
    docker-php-ext-install ldap

COPY --from=cli /app /app
