<?php
echo "RESOURCE ID:"; print_r(pg_connect("host=172.17.0.3 port=5432 dbname=postgres user=docker password=docker"));
