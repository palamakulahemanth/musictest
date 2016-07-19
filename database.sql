
CREATE DATABASE aimstonal;

CREATE USER "aimstonaladmin" IDENTIFIED BY "aimstonaladmin";

GRANT ALL PRIVILEGES  ON aimstonaladmin.* TO "aimstonaladmin"@'%' WITH GRANT OPTION;