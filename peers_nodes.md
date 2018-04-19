# Peers and Nodes, what are they and what is their role in the network?

![Peers_nodes](https://github.com/dustindreifuerst/docs/blob/Peers_nodes/assets/img/CommitARK_Nodes_Peers_Infographic.png)
## Peers

A foundational aspect of blockchain and cryptocurrencies is the concept it being a peer to peer network (P2P) that is used in lieu of a centralized server/ hierarchy.  For example, in traditional hierarchal structure such as a company, there is a CEO at the top who directs supervisors, who in turn direct employees to accomplish the tasks required within that centralized network.  In a blockchain there is no CEO, all participants in the network are considered peers, defined by their equality of standing to each other; there is no boss within a blockchain.

## Nodes

A **peer** is in fact a **node** which contains a full copy of the blockchain record and connects to other nodes forming the backbone of the network.  By having a flat vs. top down structure, this allows for a blockchain to over time naturally achieve decentralization and thus security for the network.  Referring to the centralization example, a company's network will consist of a centralized bank of computers called "servers".  If a malicious actor, such as a hacker can compromise that central server they will be able to access/steal whatever they want from that company's network with impunity.  In a decentralized system, a peer to peer network, if a hacker compromises one "peer" this would gain them no special access to the network.  By spreading out the network this makes it next to impossible to compromise it and those who use it.  

The reason for this is that every node on the network contains a copy of the entire blockchain, updated in real time as new blocks are verified and written onto it.  For any transaction to be verified a node must transmit to the network its validation of said transaction.  Then a majority of nodes must also signal to the network that their copy of the blockchain also indicates the validity of the transaction.  This ensures that only valid transactions are verified and allowed to be permanently written into a block.  The larger the network gets the less likely it is any malicious actor can gain access over enough of the nodes in a network to allow for fraudulent transactions to be passed as legitimate.    If you want to learn more refer to our section on [**What is a blockchain and why do we need it?**](http://ark.io/)

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

Early in a blockchain's life this sacrifice is quite small for a user’s computer, however over time this space can gradually overtake the capability of a normal home computer system to store it.  As of December 2017, the Bitcoin blockchain, the largest of all cryptocurrencies, was around 150 gigabytes.  A light node allows a user to access the network and transact with minimal impact to the system memory on their desktop or mobile device.  For more information refer to our sections on [**How to use your ARK Desktop wallet application**](http://ark.io/) or [**How to use your ARK mobile wallet**](http://ark.io/)

## How does the ARK network differ

The ARK network diverges in certain ways from the traditional structure of peers and nodes that you just read.

*  **Miners**

ARK does not use a traditional proof of work system to verify blocks, using instead what is called delegated proof of stake (DPOS).  A proof of work system (POW), like bitcoin, has a large network of individual miners solving computationally intensive problems to verify blocks.  This is one way a blockchain network can help provide economic deterrents against bad actors attempting to push through false or fake transactions that harm the networks trust or ability to function.  A downside to proof of work systems is the excessive energy necessary to run these computational systems.

Conversely ARK DPOS delegates are individuals voted in by their fellow community members.  The delegates with the top 51 votes are considered forging delegates and perform the function (as miners would) of grouping transactions into blocks to be added to the ARK Blockchain.  by securing the network in a more democratized fashion, incentivizing ethical behavior on the network, the ARK DPOS system uses very little energy to verify transactions.  For more information on DPOS/delegates refer to our section on [**What is DPOS and how it relates to other consensus mechanisms**](http://ark.io/)

* **Full Nodes**

Anyone is free to and encourage to run a full node in the ARK ecosystem.  Individuals who are forging delegates will be running a full node to verify transaction; this includes members who have registered as a delegate and are attempting to gain enough votes to become an actual forging delegate.  You may also not seek to be a delegate but wish to run a full node, whether for commercial, security or community support reasons.  This is called a relay node and can be set up a small amount of money in equipment costs and a low monthly fee for a dedicated server.  If you are interested in learning more refer to our section on [**How to setup you ARK node**](http://ark.io/)

* **Light Nodes**

The ARK light node doesn't differ from other cryptocurrencies in the that the ARK desktop wallet doesn't carry its own copy of the blockchain but refers to a trusted peer (full node) on the network. 

* **ACES nodes**

ARK Contract Execution Services (ACES) nodes are a unique and groundbreaking feature of the ARK ecosystem.  These are what are called "Encoded Listener Nodes" and are the first example of the smart bridges that connect ARK to other blockchain's, allowing an ARK user to interact with multiple blockchain's in the course of a transaction or contract execution.  Each ACES node will be a full node for both ARK and the Ethereum blockchain.  If for example you had a smart contract on Ethereum that was send 100 Ethereum upon execution of the contract you would be able to fund said contract with ARK via an ACES node, allowing for seamless execution.  These nodes can be private for a specific business use or publicly available to be selected in the coming ACES marketplace.  If you would like to learn more how ACES work and how it will be able to help your business refer to our site at
[**arkaces.com**](http://arkaces.com)
