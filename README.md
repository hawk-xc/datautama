# Harddisk Encryption
this sessions discuss about disk encryption in linux machine
### configuration
$ sudo su <br />
$ lsblk <br />
$ cryptsetup --verbose --verify-passphrase luksFormat /dev/sd* <br />
$ fdisk -l <br />
$ mkfs.ext4 /dev/mapper/sd* <br />
$ tune2fs -m 0 /dev/mapper/sd* <br />
$ mkdir /mnt/encrypted <br />
$ mount /dev/mapper/sd* /mnt/encrypted <br />
$ touch /mnt/encrypted/test-file1.txt <br />
$ chown -R 'whoami':users /mnt/encrypted <br />
$ touch /mnt/encrypted/test-file2.txt <br />
$ umount /dev/mapper/sd* <br />
$ cryptsetup luksClose sd* <br />

### test configuration
$ cryptsetup luksOpen /dev/sd* sd* <br />
$ mount /dev/mapper/sd* /mnt/encrypted <br />
$ umount /dev/mapper/sd* <br />
$ cryptsetup luksClose sd* <br />

# how to prevent Directory Listing bug
Directory listing (dirlisting) adalah sebuah fitur pada web server yang berfungsi menampilkan semua file dalam directory secara otomatis jika ketika file index tidak te>
### bagaimana cara mencegah directory listing pada web server Apache?
Dosis pertama dalam mencegah Directory Listing pada web server APACHE ialah melakukan disable "Options Indexes FollowSymLinks" pada konfigurasi /etc/apache2/apache2.con>
konfigurasi file apache di "nano /etc/apache2/apache2.conf" lalu lakukan pencarian dengan klik tombol kombinasi "CTRL + w". <br />
<br /><Directory /var/www/><br />
        Options Indexes FollowSymLinks <br />
        AllowOverride None <br />
        Require all granted <br />
</Directory> <br />
<br />
menjadi<br />
<br /><Directory /var/www/><br />
        Options FollowSymLinks <br />
        AllowOverride None <br />
        Require all granted <br />
</Directory> <br />
<br />
hapus options "Indexes" pada FollowSymLinks seperti konfigurasi diatas. yang mengisyaratkan kepada system agar tidak menampilan file jika tidak ada file yang dapat diIN>
<br />
### summary
jadi itulah cara prevent dari Directory Listing (DirListing), tentunya celah ini berbahaya, dicelah ini hacker dapat dengan mudah mendapatkan Information disclosure pad>
as l
