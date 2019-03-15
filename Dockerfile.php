ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli
RUN apt-get update && apt-get install php-ldap

FROM amazeeio/php:7.2-fpm

COPY --from=cli /app /app
