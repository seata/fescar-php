[English](./README.md) | 中文

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

# 介绍

[Seata](https://github.com/seata/seata) 是一个非常成熟的分布式事务框架，在Java领域是事实上的分布式事务技术标准平台。[Seata-PHP](https://github.com/seata/seata-php) 是 seata 多语言生态中的 PHP 语言实现版本，实现了 Java 和 PHP 之间的互通，让 PHPer 也能使用 Seata-php 来实现分布式事务。

> **在学习 `Seata-PHP`前我们首先来了解一下什么是 `Seata`**

## 什么是 Seata?

一个具有高性能和易用性的**微服务**架构**分布式事务**解决方案。

### 微服务中的分布式事务问题

让我们想象一个传统的单体应用程序。它的业务由3个模块组成。他们使用单一的本地数据源。

自然，数据的一致性将由本地事务来保证。

![Monolithic App](https://img.alicdn.com/imgextra/i3/O1CN01FTtjyG1H4vvVh1sNY_!!6000000000705-0-tps-1106-678.jpg)

微服务架构发生了变化。上面提到的 3 个模块被设计为 3 个不同数据源之上的 3 个服务([Pattern: Database per service](http://microservices.io/patterns/data/database-per-service.html))。 每个服务内的数据一致性自然由本地事务保证。

**但是整个业务逻辑范围呢？**

![Microservices Problem](https://img.alicdn.com/imgextra/i1/O1CN01DXkc3o1te9mnJcHOr_!!6000000005926-0-tps-1268-804.jpg)

### Seata 是怎么做的呢?

Seata 只是上述问题的一个解决方案。

![Seata solution](https://img.alicdn.com/imgextra/i1/O1CN01FheliH1k5VHIRob3p_!!6000000004632-0-tps-1534-908.jpg)

首先，如何定义一个 **分布式事务**?

我们说，**分布式事务** 是由一批分支事务组成的 **全局事务**，而通常 **分支事务** 只是本地事务。

![全局 & 分支](https://cdn.nlark.com/lark/0/2018/png/18862/1545015454979-a18e16f6-ed41-44f1-9c7a-bd82c4d5ff99.png)

在 Seata 框架中，有三个角色。

- **事务协调者（TC）：** 维护全局和分支事务的状态，推动全局提交或回滚。

- **事务管理者（TM）：** 定义全局事务的范围：开始一个全局事务，提交或回滚一个全局事务

- **资源管理这（RM）：** 管理分支事务工作的资源，与TC对话以注册分支事务和报告分支事务的状态，并推动分支事务的提交或回滚。

![模型](https://cdn.nlark.com/lark/0/2018/png/18862/1545013915286-4a90f0df-5fda-41e1-91e0-2aa3d331c035.png)

Seata 管理的分布式事务的一个典型生命周期：

1. TM 要求 TC 开始一个新的全局事务。TC 生成一个代表全局事务的 XID。

2. XID 是通过微服务的调用链传播的。

3. RM 将本地事务登记为 XID 对应的全局事务分支，并提交给 TC。

4. TM 要求 TC 提交或回滚 XID 的相应全局事务。

5. TC 驱动 XID 对应的全局事务下的所有分支事务，完成分支提交或回滚。

![典型流程](https://cdn.nlark.com/lark/0/2018/png/18862/1545296917881-26fabeb9-71fa-4f3e-8a7a-fc317d3389f4.png)

关于原理和设计的更多细节，请访问 [Seata wiki page](https://github.com/seata/seata/wiki)。

## Seata-PHP TODO 列表

- [ ] TCC
- [ ] XA
- [x] AT
- [ ] SAGA
- [x] TM
- [ ] RPC 通信
- [ ] 防悬挂
- [ ] 空回滚
- [ ] 注册中心
- [ ] Metric 监控
- [x] 示例

## 怎样运行 Seata-PHP？

1. 下载服务端 [**seata java**](https://seata.io/zh-cn/blog/download.html) 启动 TC 服务端. 可以参考 [**seata 部署指南**](https://seata.io/zh-cn/docs/ops/deploy-guide-beginner.html) 。

2. 在 [**seata-skeleton**](https://github.com/PandaLIU-1111/seata-skeleton) 环境中运行 Seata-PHP。


## 如何成为贡献者?

Seata-PHP 正处于建设阶段。 欢迎行业同仁入群参与其中，与我们一起推动 Seata-PHP 的建设！如果你想给 Seata-PHP 贡献代码，可以参考 [**code contribution Specification**](./300.contributing/README.md) 文档来了解社区的规范，也可以加入我们的社区钉钉群： 44788115 ，一起沟通交流！

## License

Seata-PHP 使用 Apache 许可证2.0版本，请参阅 [LICENSE 文件](https://github.com/seata/seata-php/blob/master/LICENSE)了解更多。
