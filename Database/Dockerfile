FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD superadmin
ENV MYSQL_DATABASE vaksinasi
ENV MYSQL_USER admin
ENV MYSQL_PASSWORD admin

COPY ./vaksinasi.sql /docker-entrypoint-initdb.d/vaksinasi.sql
