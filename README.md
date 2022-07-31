# Seata-PHP: Simple Extensible Autonomous Transaction Architecture(PHP version)

[![license](https://img.shields.io/github/license/seata/seata-php.svg)](https://www.apache.org/licenses/LICENSE-2.0.html)

[简体中文 ZH](./README_ZH.md)

## What is seata-php?

Seata is a very mature distributed transaction framework, and is the de facto standard platform for distributed transaction technology in the Java field. Seata-php is the implementation version of PHP language in Seata multilingual ecosystem, which realizes the interoperability between Java and PHP, so that PHP developers can also use seata-php to realize distributed transactions. Please visit the [official website of Seata](https://seata.io/en-us) to view the quick start and documentation.

The principle of Seata-PHP is consistent with that of Seata-Java, which is composed of TM, RM and TC. The functions of TC reuse Java, and the functions of TM and RM will be aligned with Seata-Java later. The overall process is as follows:

![](https://user-images.githubusercontent.com/68344696/145942191-7a2d469f-94c8-4cd2-8c7e-46ad75683636.png)

## TODO list

- [ ] TCC
- [ ] XA
- [x] AT
- [ ] SAGA
- [x] TM
- [ ] RPC communication
- [ ] Transaction anti suspension
- [ ] Null compensation
- [ ] Registration Center
- [ ] Metric monitoring
- [x] Examples


## How to run？

1. First download [**seata java**](https://seata.io/zh-cn/blog/download.html) and  Start the TC service. For the specific process, refer to  [**seata deployment guide**](https://seata.io/zh-cn/docs/ops/deploy-guide-beginner.html) Documentation
2. Run seata-php whith [**seata-skeleton**](https://github.com/PandaLIU-1111/seata-skeleton)


## How to join us？

Seata-php is currently in the construction stage. Welcome colleagues in the industry to join the group and work with us to promote the construction of seata-php! If you want to contribute code to seata-php, you can refer to the  [**code contribution Specification**](./docs/en/300.contributing/README.md)  document to understand the specifications of the community, or you can join our community DingTalk group: 44788115 and communicate together!


## Licence

Seata-php uses Apache license version 2.0. Please refer to the [license file](https://github.com/seata/seata-php/blob/master/LICENSE) for more information.
