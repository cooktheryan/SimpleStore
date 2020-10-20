FROM registry.access.redhat.com/rhel8/php-72

RUN git clone https://github.com/cooktheryan/SimpleStore.git /tmp/app && mv /tmp/app/LifestyleStore/* /opt/app-root/src/
