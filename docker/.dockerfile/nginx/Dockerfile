FROM ubuntu:20.04

ARG APP_NAME

# America/Sao_Paulo
# America/New_York
RUN ln -fs /usr/share/zoneinfo/America/New_York /etc/localtime

RUN apt-get update && apt-get install -y \
        curl nginx

EXPOSE 80
WORKDIR /var/www/${APP_NAME}

CMD [ "nginx", "-g", "daemon off;" ]