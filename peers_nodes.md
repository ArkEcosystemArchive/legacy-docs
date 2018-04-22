# Peers and Nodes, what are they and what is their role in the network?

Traditional network computing systems, are built around a centralized client server model where a central authority is queried by a client (user), information is passed to the client and then the connection is terminated.  This is similar to a Web Browser, which acts as a client program requesting a service from the server who then delivers the web page information to the client.

![Systems Overview](https://github.com/dustindreifuerst/docs/blob/Peers_nodes/assets/img/Systems%20Overview.png)

## Centralized network system

In a centralized network system, one node (possibly more) is in a central location and linked to every client on the network while conducting the computing, data collection and data dissemination across the network.  Centralized networks are inherently less secure due to there being a single point of failure in the system.  If the the main server is compromised the network will no longer be able to function, clients will lose access and have their data compromised.

## Decentralized network system

A decentralized network system is compromised of nodes distributed across a disparate georgraphic area, under control of the individual node operators and not a central authority.  Each node in the network has equality in regards to one another, trust is evenly distributed to all nodes (peers).  Decentralized networks are inherently distributed, but distributed networks are not necessarily decentralized; A hallmark of a decentralized system is that decisions are not made from any hierarchical authority but locally among peers.

## Distributed network system

A distributed network system has nodes that can span geographical boundaries and communicate/coordinate actions with other node with data and computation and work spread across nodes of the network.  Distributed systems can be centrally controlled, cloud computing systems for example distribute work across and data across a geographically diverse network but have a central authority.  Distributed systems can be decentralized or centralized.  

## Client server network

This network model is centralized where clients query the central server for information as all information, computing and decisions are made at the point of the central server.

## Peer to Peer network

A peer to peer network differs from a client server model by its lack of centralized authority.  Every **node** is a **peer** and every node is equal on the network.  By having a flat vs. top down structure, this allows for a blockchain, over time, to naturally achieve decentralization and thus security for the network.  Referring to an example of a centralized system, a company's network will consist of a centralized bank of computers called "servers".  If a malicious actor, such as a hacker can compromise that central server they will be able to access/steal whatever they want from that company's network with impunity.  In a decentralized system, a peer to peer network, if a hacker compromises one "peer" this would gain them no special access to the network.  By spreading out the network this makes it next to impossible to compromise it and those who use it.  

The reason for this is that every node on the network contains a copy of the entire blockchain, updated in real time as new blocks are verified and written onto it.  For any transaction to be verified a node must transmit to the network its validation of said transaction.  Once validated a majority of nodes must also signal to the network that their copy of the blockchain also indicates the validity of the transaction.  This ensures that only valid transactions are verified and allowed to be permanently written into a block.  The larger the network gets the less likely it is any malicious actor can gain access over enough of the nodes in a network to allow for fraudulent transactions to be passed as legitimate.    If you want to learn more refer to our section on [**What is a blockchain and why do we need it?**](http://ark.io/)

# Traditional blockchain Infrastructure

In traditional blockchain infrastructures you will have the following

* **Miners**
* **Full Nodes**
* **Light Nodes**

**Miners**

Miners can perform the function of a node in terms of verifying individual transactions since every miner contains a copy of the blockchain, however their most important role is to find and verify blocks of transactions.  These blocks of multiple transactions once verified by a miner are written forever in to that network blockchain, thus their role in the network is extremely important.

**Full Nodes**

A full node contains a complete copy of that networks blockchain and verify individual transactions that are broadcast to the network; this then allows these individual transactions to be bundled with others into a block which miners then find and verify.  Full nodes are the most ideal solution for every use to ensure that they have the most up to date and correct version of the blockchain that their wallet is accessing.  It also ensures that you have full control and privacy of your funds and transactions.  If you use a light node (see below) your transactions are run entirely through the node that you connect to.  If you value privacy and security above all else, then a full node is a major step in that direction. Full nodes do however come with a trade off in terms of cost to run as detailed below in the light node section.

**Light Nodes**

This is the most common form of node in a network and is associated with individuals like yourself, downloading and running a desktop wallet.  This wallet does not contain, as a full node would, a complete copy of the blockchain (see above); instead it connects to a trusted peer (full node) to access a copy of the blockchain.  Light nodes exist because most individual users do not wish to have an ever-increasing amount of their computers memory devoted to maintaining a full copy of the blockchain.  

Early in a blockchain's life this sacrifice is quite small for a user’s computer, however over time this space can gradually overtake the capability of a normal home computer system to store it.  As of December 2017, the Bitcoin blockchain, the largest of all cryptocurrencies, was around 150 gigabytes.  A light node allows a user to access the network and transact with minimal impact to the system memory on their desktop or mobile device.  



# How does the ARK network work?

![ARK network overview](https://github.com/dustindreifuerst/docs/blob/Peers_nodes/assets/img/ARK%20NODE%20TYPES%20INFOGRAPHIC.png)

The ARK network diverges in certain ways from the traditional structure of peers and nodes that you just read.

**Forging nodes not Miners**

ARK does not use a traditional proof of work system to verify blocks, using instead what is called delegated proof of stake (DPOS).  A proof of work system (POW), like bitcoin, has a large network of individual miners solving computationally intensive problems to verify blocks.  This is one way a blockchain network can help provide economic deterrents against bad actors attempting to push through false or fake transactions that harm the networks trust or ability to function.  A downside to proof of work systems is the excessive energy necessary to run these computational systems.

Conversely ARK DPOS delegates are individuals voted in by their fellow community members.  The delegates with the top 51 votes are considered forging delegates and perform the function (as miners would) of grouping transactions into blocks to be added to the ARK Blockchain.  by securing the network in a more democratized fashion, incentivizing ethical behavior on the network, the ARK DPOS system uses very little energy to verify transactions.  For more information on DPOS/delegates refer to our section on [**What is DPOS and how it relates to other consensus mechanisms**](http://ark.io/)

**Relay nodes**
Relay nodes are considered "non-forging nodes" and do not receive rewards for processing transactions on the network.  Both forging and relay (non-forging) nodes on the network validate transactions against their locally stored copy of the blockchain and continually update it as new blocks are forged.  This copy of the blockchain is derived from the consensus by all the nodes (peers) in the network; this data is shared from node to node on the list of trusted peers.  Nodes that give bad data or have repetitive errors (not in sync, inactive, etc.) can be blacklisted from the network and no longer allowed to participate.  When a transaction is validated by a relay node it is passed along until it reaches a forging node to be included in the next block.  Because of this relay activity the network is protected from malicious actors since peers need to agree for data to pass along to another party.

Anyone is encouraged to run a relay node in the ARK ecosystem.  The more nodes available the more secure and strong the network is.  Individuals will run these nodes for a variety of reasons whether it’s for commercial/security concerns or for community support.  Developers who are using the ARK ecosystem to deploy their own blockchain's, utilize smartbridge's, etc. can use a relay node with web enabled API to access information on the ARK network.  All relay nodes are automatically enabled with API access however node operators can turn this function off.

**Run a relay node**

There are two ways that you can run a relay node.  The first being a dedicated system in your home, the second being through a Virtual Private Server (VPS).  What avenue you take will depend on your preferences and situation.  

Ask yourself the following questions prior to committing to a home-based node

* Can the plan I currently have through my residential Internet service provider handle the increased bandwidth requirements of running a relay node?
* Can I ensure that this node is connected to the internet 24/7?
* Do I have the technical knowledge to keep a node running and deal with outages/issues as they appear?

If you answered **No** to any of those questions it would probably be more appropriate for you to consider using a VPS service.  It's also important to note that if you run a home-based node and it has consistent errors from not being online it can be blacklisted from the network as a bad node.

If you do decide to set up a home-based node, below are the hardware/software for the requirements for your system.


**Hardware**

* 1 Dedicated CPU core (not shared) w/ x86 or x64 architecture;  dual CPU+ is recommended, the higher the CPU clock speed the better.
* 4GB RAM, 8GB+ is recommended
* 20GB free hard drive space, 40GB+ recommend with  SSD/m.2 vs. using traditional HDD drives.

**Software**

* Linux, Ubuntu 16.04

**VPS/Cloud  Services**

Virtual Private Servers (VPS)  are encouraged since they offer the node near universal uptime, system redundancies and support staff if you are not technically savvy.  It’s basically renting vs. owning a home, if something goes wrong they will take care of it vs. you having to troubleshoot the issue yourself.  

**VPS requirements**

When you choose your plan, you will need to ensure that the plan you choose meets the hardware requirements listed above for the home-based node in terms of memory, CPU speed, etc.

There are numerous companies that offer VPS services and this choice will be up to you, however the ARK team recommends these three services

* DigitalOcean [DigitalOcean](http://www.digitalocean.com)
* Vultr [Vultr](http://www.vultr.com)
* OVH [OVH](http://www.ovh.com)

For Step by Step instructions on how to set up a ARK relay node, please refer to our article on the ARK Blog [How to Set up your ARK Node](https://blog.ark.io/how-to-setup-a-node-for-ark-and-a-basic-cheat-sheet-4f82910719da). 

After following these instructions to set up your node, whether VPS or home based  and is live you will connect to the ARK network via "Seed Nodes".  These are the first nodes on the network, run by the development team that can be queried to gather the listed of trusted peers and become an active node on the network. 

Anyone is free to and encourage to run a full node in the ARK ecosystem.  Individuals who are forging delegates will be running a full node to verify transaction; this includes members who have registered as a delegate and are attempting to gain enough votes to become an actual forging delegate.  You may also not seek to be a delegate but wish to run a full node, whether for commercial, security or community support reasons.  This is called a relay node and can be set up a small amount of money in equipment costs and a low monthly fee for a dedicated server.  If you are interested in learning more refer to our section on [**How to setup you ARK node**](https://blog.ark.io/how-to-setup-a-node-for-ark-and-a-basic-cheat-sheet-4f82910719da)

**Client not Light Nodes**

The ARK client doesn't differ from other cryptocurrency light nodes, in the that the ARK desktop wallet doesn't carry its own copy of the blockchain but refers to a trusted peer (relay node) on the network. 

For more information refer to our sections on [**How to use your ARK Desktop wallet application**](http://ark.io/) or [**How to use your ARK mobile wallet**](http://ark.io/)

**ACES nodes**

ARK Contract Execution Services (ACES) nodes are a unique and groundbreaking feature of the ARK ecosystem.  These are what are called "Encoded Listener Nodes" and are the first example of the smart bridges that connect ARK to other blockchain's, allowing an ARK user to interact with multiple blockchain's in the course of a transaction or contract execution.  Each ACES node will be a full node for both ARK and the Ethereum blockchain.  If for example you had a smart contract on Ethereum that was send 100 Ethereum upon execution of the contract you would be able to fund said contract with ARK via an ACES node, allowing for seamless execution.  These nodes can be private for a specific business use or publicly available to be selected in the coming ACES marketplace.  If you would like to learn more how ACES work and how it will be able to help your business refer to our site at
[**arkaces.com**](http://arkaces.com)
