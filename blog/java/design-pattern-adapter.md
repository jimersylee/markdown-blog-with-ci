<!--
author: Jimersy Lee
head: 
date: 2015-05-22
title: 设计模式之适配器模式
tags: JAVA,PATTERN
images: 
category: java
status: publish
summary: 现在已经存在IDuck接口,Turkey接口,假设你缺鸭子对象,想用一些火鸡对象来冒充.显而易见,因为火鸡的接口不同,所以我们不能公然拿来用,那么写个适配器吧

-->

# 适配器模式与外观模式


## 适配器模式
### 需求
现在已经存在IDuck接口,Turkey接口,假设你缺鸭子对象,想用一些火鸡对象来冒充.显而易见,因为火鸡的接口不同,所以我们不能公然拿来用,那么写个适配器吧


### FAQ
- 一个适配器需要做多少适配工作?
    >实现一个适配器所需要进行的工作,和目标接口的大小成正.如果不用适配器,你就必须改写客户端的代码来调用这个新的接口.相比之下,使用适配器成本更少
 
- 一个适配器只能封装一个类吗?
    >虽然大多数的适配器模式所采取的例子都是让一个适配器包装一个被适配者,但还是会有状况需要让一个适配器包装多个被适配者.这设计到另一个模式,被称为外观模式(Facade Pattern),人们常常将外观模式和适配器模式混为一谈,本章稍后对此详细说明
 
- 万一我的系统中新旧并存,是不是不使用适配器更好
    >可以创建一个双向的适配器,支持两边的接口.这样,这个适配器可以当做旧的接口,或者当做新的接口使用
    
    
## 外观模式
>外观模式提供了一个统一的接口,用来访问子系统中的一群接口.外观定了一个高层接口,让子系统更容易使用.

外观模式的意图是提供一个简单的接口,好让一个子系统更易于使用


## 要点
- 当需要使用一个现有的类而其接口并不符合你的需求时,就使用适配器
- 当需要简化并统一一个很大的接口或者一群复杂的接口时,使用外观
- 适配器改变接口以符合客户的期望
- 外观将客户从一个复杂的子系统中解耦
- 实现一个适配器可能需要一番功夫,也可能不费功夫,视目标接口的大小与复杂度而定
- 实现一个外观,需要将子系统组合进外观中,然后将工作委托给给子系统执行
- 适配器模式有两种形式:对象适配器和类适配器.类适配器需要用到多重继承
- 你可以为一个子系统实现一个以上的外观
- 适配器将一个对象包装起来以改变其接口;装饰着将一个对象包装起来以增加新的行为和责任;而外观将一群对象"包装"起来以简化其接口



##项目地址
[java设计模式实现](https://github.com/jimersylee/DesignPattern)
如果觉得有点收获,记得在项目上点star哦!