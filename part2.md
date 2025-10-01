
Part 2: 个人经历 

最常使用的编程语言及年限：PHP 8年

最熟悉的语言：PHP

熟悉的语言：js，jq、sql、python go node

了解过的语言：rust  move 

Q1. 你在哪个平台有最多的开发经验？

主要是 Linux 服务器，使用 php(5.6:7.4:8.0) + nginx + mysql+ redis 源码编译安装搭建 Web 应用，也有一定的 Docker 容器化部署经验。 通过docker-compose 实现lnmp web环境

Q2. 你对哪些平台的开发感兴趣？

Web 后端开发、移动端 API 接口开 SaaS 平台开发

Q3. 请写出你使用过的相关技术栈：

MVC 框架：laravel、yii，thinkphp，nestjs，koa

ORM 工具：Eloquent ORM

测试框架：PHPUnit

IDE：phpstorm、vscode

版本管理工具：Git 

CI/CD 工具：GitLab CI、Jenkins、Docker

Q5 进一步问题

你希望在 Comiru 实现什么目标？
本人之前也有教育方面的工作经历（K12教育和it教育）
希望参与教育 SaaS 产品的开发与优化，积累更多大型系统架构经验，包括微服务方面的经验

你对哪些 Web 或手机应用感兴趣？
  最近发现的：Notion（知识管理）

最近对哪些技术产生了兴趣？为什么？
1.对微服务架构和消息队列（Kafka、RabbitMQ） 很感兴趣，因为它们在高并发系统中的应用能极大提升系统的可扩展性和稳定性。这些技术都是我之前工作没有涉及到的
2.智能体dify，扣子，了解最新的行业知识，搭建智能化客服或者机器人
3.量化交易 https://www.freqtrade.io/en/2024.11/docker_quickstart，搞钱
在你的开发经历中，最困难或最有趣的技术问题是什么？为什么？
曾经遇到过 MySQL 百万级数据表的慢查询优化问题，和对应的数据导出excel 接口超时，以及超出内存限制。

你是如何解决这个问题的？具体方法和实现是什么？
通过以下方式解决：
分析慢查询日志，找出性能瓶颈 SQL    explain  分析慢sql
使用 索引优化、SQL 重写
将历史数据归档到冷表，减少主表数据量
引入 Redis 缓存，降低数据库压力


请提供你的公开代码仓库GitHub。
GitHub: https://github.com/secretgao
  
请提供最多 3 本（篇）对你影响很大的技术书籍或文章。
小灰 漫画算法 
深入理解 MySQL
https://www.cs.usfca.edu/~galles/visualization/Algorithms.html    动态算法演示
 
