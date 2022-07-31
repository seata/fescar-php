# Seata-PHP 中文简介


[![license](https://img.shields.io/github/license/seata/seata-php.svg)](https://www.apache.org/licenses/LICENSE-2.0.html)


## 什么是 seata-php?

Seata是一个非常成熟的分布式事务框架，在Java领域是事实上的分布式事务技术标准平台。Seata-php 是 seata 多语言生态中的 PHP 语言实现版本，实现了 Java 和 PHP 之间的互通，让 PHPer 也能使用 seata-php 来实现分布式事务。请访问[ Seata 官网 ](https://seata.io/zh-cn) 查看快速开始和文档。

Seata-php 的原理和 Seata-java 保持一致，都是由 TM、RM 和 TC 组成，其中 TC 的功能复用 Java 的，TM和RM功能后面会和 Seata-java对齐，整体流程如下

![](https://user-images.githubusercontent.com/68344696/145942191-7a2d469f-94c8-4cd2-8c7e-46ad75683636.png)

## TODO

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


## 怎样运行 seata-php？

1. 下载服务端 [**seata java**](https://seata.io/zh-cn/blog/download.html) 启动 TC 服务端. 可以参考 [**seata 部署指南**](https://seata.io/zh-cn/docs/ops/deploy-guide-beginner.html) 。
2. 在 [**seata-skeleton**](https://github.com/PandaLIU-1111/seata-skeleton) 环境中运行 seata-php。


## 如何成为贡献者?

Seata-php 正处于建设阶段。 欢迎行业同仁入群参与其中，与我们一起推动 seata-php的建设！如果你想给 seata-php 贡献代码，可以参考 [**code contribution Specification**](./300.contributing/README.md) 文档来了解社区的规范，也可以加入我们的社区钉钉群： 44788115 ，一起沟通交流！


## Licence

Seata-php 使用 Apache 许可证2.0版本，请参阅 [LICENSE 文件](https://github.com/seata/seata-php/blob/master/LICENSE)了解更多。.
