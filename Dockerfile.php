ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.2-fpm
RUN apt-get update && apt-get install php-ldap

COPY --from=cli /app /app
