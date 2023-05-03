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

https://roadmap.sh/
