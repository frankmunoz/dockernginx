<?php
echo "RESOURCE ID:"; print_r(pg_connect("host=frankpg port=5432 dbname=postgres user=docker password=docker"));
