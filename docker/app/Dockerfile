ARG OS
ARG OS_VERSION
FROM $OS:$OS_VERSION

RUN apt update && apt install -y \
    nginx

CMD ["nginx", "-g", "daemon off;"]
# TODO пока только мы установили nginx, еще нужно будет его поднастроить и дальше установить PHP и Composer