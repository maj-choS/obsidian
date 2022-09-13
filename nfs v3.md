![[Pasted image 20220911190618.png]]

/opt/shared_folder/ 127.0.0.1(insecure,rw,sync,no_subtree_check,no_root_squash)

```
mount -o sec=sys,vers=3,nolock,proto=tcp
```

mount -o sec=sys,vers=3,nolock,proto=tcp 127.0.0.1:/opt/shared_folder/ /tmp/mn
<ock,proto=tcp 127.0.0.1:/opt/shared_folder/ /tmp/mn
mount: only root can use "--options" option

mount sec=sys,vers=3,nolock,proto=tcp 127.0.0.1:/opt/shared_folder/ /tmp/mn

![[Pasted image 20220911200856.png]]
/dev/sr0        /media/cdrom0   udf,iso9660 user,noauto     0       0

www-data@deb:/tmp$ ls -la /etc/fstab
ls -la /etc/fstab
-rw-r--r-- 1 root root 664 Apr  9  2020 /etc/fstab

lrwxrwxrwx  1 root root         9 Apr  6  2019 mount.nfs4 -> mount.nfs

```
vi /etc/fstab
```

cat fstab
 /etc/fstab: static file system information.

Use 'blkid' to print the universally unique identifier for a
device; this may be used with UUID= as a more robust way to name devices that works even if disks are added and removed. See fstab(5).

 <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/vda1 during installation
UUID=72e0899e-61a0-4d86-b3a3-fbb6d449942d /               ext4    errors=remount-ro 0       1
# swap was on /dev/vda5 during installation
UUID=68a92462-d370-4673-a4d0-54afacb8d77b none            swap    sw              0       0
/dev/sr0        /media/cdrom0   udf,iso9660 user,noauto     0       0


df -h
Filesystem      Size  Used Avail Use% Mounted on
/dev/sda1       5.9G  1.1G  4.5G  19% /
udev            2.0G     0  2.0G   0% /dev
tmpfs           2.0G     0  2.0G   0% /dev/shm
tmpfs           395M   21M  375M   6% /run
tmpfs           5.0M     0  5.0M   0% /run/lock
tmpfs           2.0G     0  2.0G   0% /sys/fs/cgroup
tmpfs           395M     0  395M   0% /run/user/0


www-data@deb:/$ ip a
ip a
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN group default qlen 1000
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    inet 127.0.0.1/8 scope host lo
       valid_lft forever preferred_lft forever
    inet6 ::1/128 scope host 
       valid_lft forever preferred_lft forever
2: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
    link/ether 00:00:00:00:00:04 brd ff:ff:ff:ff:ff:ff
    inet 10.66.4.100/24 brd 10.66.4.255 scope global dynamic eth0
       valid_lft 3178sec preferred_lft 3178sec
    inet6 fe80::200:ff:fe00:4/64 scope link 
       valid_lft forever preferred_lft forever

[[lokal ports]]
