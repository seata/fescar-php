English | [中文](./README-CN.md)

<p align="center"><a href="https://hyperf.wiki" target="_blank" rel="noopener noreferrer"><img width="70" src="https://img.alicdn.com/imgextra/i1/O1CN011z0JfQ2723QgDiWuH_!!6000000007738-2-tps-1497-401.png" alt="seata Logo"></a></p>

<p align="center">
  <a href="https://github.com/seata/seata-php/releases"><img src="https://poser.pugx.org/dtm-php/dtm-client/v/stable" alt="Stable Version"></a>
  <a href="https://www.php.net"><img src="https://img.shields.io/badge/php-%3E=8.0-brightgreen.svg?maxAge=2592000" alt="Php Version"></a>
  <a href="https://github.com/seata/seata-php/master/LICENSE"><img src="https://img.shields.io/github/license/seata/seata-php.svg" alt="dtm-client License"></a>
</p>
<p align="center">
  <a href="https://github.com/seata/seata-php/actions"><img src="https://github.com/dtm-php/dtm-client/actions/workflows/test.yml/badge.svg" alt="PHPUnit for dtm-client"></a>
  <a href="https://packagist.org/packages/seata/seata"><img src="https://poser.pugx.org/seata/seata/downloads" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/seata/seata"><img src="https://poser.pugx.org/seata/seata/d/monthly" alt="Monthly Downloads"></a>
</p>

# Introduce

[Seata](https://github.com/seata/seata) is a very mature distributed transaction framework, and is the de facto standard platform for distributed transaction technology in the Java field. [Seata-php](https://github.com/seata/seata-php) is the implementation version of PHP language in Seata multilingual ecosystem, which realizes the interoperability between Java and PHP, so that PHP developers can also use Seata-PHP to realize distributed transactions.

> **Before learning about the ` Seata-php `, let's first understand what's the ` Seata `**

## What is Seata?

A **distributed transaction solution** with high performance and ease of use for **microservices** architecture.
### Distributed Transaction Problem in Microservices

Let's imagine a traditional monolithic application. Its business is built up with 3 modules. They use a single local data source.

Naturally, data consistency will be guaranteed by the local transaction.

![Monolithic App](https://img.alicdn.com/imgextra/i3/O1CN01FTtjyG1H4vvVh1sNY_!!6000000000705-0-tps-1106-678.jpg)

Things have changed in a microservices architecture. The 3 modules mentioned above are designed to be 3 services on top of 3 different data sources ([Pattern: Database per service](http://microservices.io/patterns/data/database-per-service.html)). Data consistency within every single service is naturally guaranteed by the local transaction.

**But how about the whole business logic scope?**

![Microservices Problem](https://img.alicdn.com/imgextra/i1/O1CN01DXkc3o1te9mnJcHOr_!!6000000005926-0-tps-1268-804.jpg)

### How Seata do?

Seata is just a solution to the problem mentioned above.

![Seata solution](https://img.alicdn.com/imgextra/i1/O1CN01FheliH1k5VHIRob3p_!!6000000004632-0-tps-1534-908.jpg)

Firstly, how to define a **Distributed Transaction**?

We say, a **Distributed Transaction** is a **Global Transaction** which is made up with a batch of **Branch Transaction**, and normally **Branch Transaction** is just **Local Transaction**.

![Global & Branch](https://cdn.nlark.com/lark/0/2018/png/18862/1545015454979-a18e16f6-ed41-44f1-9c7a-bd82c4d5ff99.png)

There are three roles in Seata Framework:

- **Transaction Coordinator(TC):** Maintain status of global and branch transactions, drive the global commit or rollback.

- **Transaction Manager(TM):** Define the scope of global transaction: begin a global transaction, commit or rollback a global transaction.

- **Resource Manager(RM):** Manage resources that branch transactions working on, talk to TC for registering branch transactions and reporting status of branch transactions, and drive the branch transaction commit or rollback.

![Model](https://cdn.nlark.com/lark/0/2018/png/18862/1545013915286-4a90f0df-5fda-41e1-91e0-2aa3d331c035.png)

A typical lifecycle of Seata managed distributed transaction:

1. TM asks TC to begin a new global transaction. TC generates an XID representing the global transaction.

2. XID is propagated through microservices' invoke chain.

3. RM registers local transaction as a branch of the corresponding global transaction of XID to TC.

4. TM asks TC for committing or rollbacking the corresponding global transaction of XID.

5. TC drives all branch transactions under the corresponding global transaction of XID to finish branch committing or rollbacking.

![Typical Process](https://cdn.nlark.com/lark/0/2018/png/18862/1545296917881-26fabeb9-71fa-4f3e-8a7a-fc317d3389f4.png)

For more details about principle and design, please go to [Seata wiki page](https://github.com/seata/seata/wiki).

## Seata-php TODO List

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

Seata-PHP is currently in the construction stage. Welcome colleagues in the industry to join the group and work with us to promote the construction of Seata-PHP! If you want to contribute code to Seata-PHP, you can refer to the  [**code contribution Specification**](./docs/en/300.contributing/README.md)  document to understand the specifications of the community, or you can join our community DingTalk group: 44788115 and communicate together!


## License

Seata-PHP uses Apache license version 2.0. Please refer to the [license file](https://github.com/seata/seata-php/blob/master/LICENSE) for more information.
