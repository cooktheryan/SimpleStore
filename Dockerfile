FROM registry.redhat.io/ubi7/php-72

RUN git clone https://github.com/cooktheryan/SimpleStore.git /tmp/app && mv /tmp/app/LifestyleStore/* /opt/app-root/src/

CMD /usr/libexec/s2i/run
