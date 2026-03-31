#!/bin/bash
ssh -i "/home/fog/.ssh/id_rsa" u0356931@server162.hosting.reg.ru <<'ENDSSH'
cd www/orbat.ru
git pull
/opt/php/5.6/bin/php composer.phar install
/opt/php/5.6/bin/php yii migrate --interactive=0
echo 'Успешно';
ENDSSH
