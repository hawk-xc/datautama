# Harddisk Encryption
this sessions discuss about disk encryption in linux machine
### configuration
$ sudo su
$ lsblk
$ cryptsetup --verbose --verify-passphrase luksFormat /dev/sd*
$ fdisk -l
$ mkfs.ext4 /dev/mapper/sd*
$ tune2fs -m 0 /dev/mapper/sd*
$ mkdir /mnt/encrypted
$ mount /dev/mapper/sd* /mnt/encrypted
$ touch /mnt/encrypted/test-file1.txt
$ chown -R 'whoami':users /mnt/encrypted
$ touch /mnt/encrypted/test-file2.txt
$ umount /dev/mapper/sd*
$ cryptsetup luksClose sd*

### test configuration
$ cryptsetup luksOpen /dev/sd* sd*
$ mount /dev/mapper/sd* /mnt/encrypted
$ umount /dev/mapper/sd*
$ cryptsetup luksClose sd*
