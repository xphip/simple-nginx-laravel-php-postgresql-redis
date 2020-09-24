FROM ubuntu:20.04

ARG APP_NAME
ARG DB_USER
ARG DB_PASSWORD

# America/Sao_Paulo
# America/New_York
RUN ln -fs /usr/share/zoneinfo/America/New_York /etc/localtime

RUN apt-get update && apt-get install -y \
        curl postgresql-12

# RUN chown -R postgres:postgres /var/run/postgresql
# RUN chmod 777 /var/run/postgresql

EXPOSE 5432
WORKDIR /var/www/${APP_NAME}
USER postgres

RUN /etc/init.d/postgresql start && \
    psql -U postgres -c "CREATE USER $DB_USER WITH PASSWORD '$DB_PASSWORD';" && \
    /etc/init.d/postgresql stop

CMD [ "/usr/lib/postgresql/12/bin/postgres", "-D", "/var/lib/postgresql/12/main", "-c", "config_file=/etc/postgresql/12/main/postgresql.conf" ]