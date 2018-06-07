# Consensus Mechanisms
There is a multitude of mechanisms used in peer-to-peer sharing protocols to maintain a valid history, some more common than others. In this document, we review a wide range of algorithms so you can familiarize yourself with many different kinds of consensus mechanisms.

For simplicity, we will use the term "agreement" when referring to the underlying algorithm or mechanism of consensus in peer-to-peer protocols, including but not limited to Blockchains.

Now, it is important to take note of the progression and improvement of various agreement systems for distributed networks. Many are variations on previous existing and tested solutions, and every single one most definitely borrows some of its core design from past works.

Before we dive into the various categories and break them down in detail, let us iterate quickly the problem we're trying to solve with all of these implementations.

## Byzantine Agreement
The problems that occur most often in a network of decentralized peers, where the power structure can be split between its members, are often referred to as being solved through Byzantine Agreement (BA). This nomenclature comes from a popularized decision-making problem that arises when any number of soldiers (or peers) in an army (or network) have the option of acting arbitrarily and potentially cause harm to other members of the group - the [General's Problem](https://en.wikipedia.org/wiki/Byzantine_fault_tolerance). A network which can successfully prevent and heal from issues produced by bad actors and unavailable peers is said to be Byzantine Fault Tolerant (BFT). As many of your know, Bitcoin is claimed to be the first practical application of such category in modern times.

## Basics
Before exploring agreement styles, one should be familiar with the general flow of decentralized ledgers like Blockchains. Typically, accounts have a pair of keys, one used to receive coins and the other to send them. The members of the network can create accounts and are connected to other peers. The peer's role is to propagate data, like transactions, to other peers. Peers can optionally participate in creating blocks of transactions which could be added to the chain, depending on agreement. The Blockchain is the series of blocks which are said to contain the official transaction history, is immutable and distributed.

That's it.

The various kinds of agreement that come with different protocols are in most cases results of trade-offs and optimizations regarding decentralization, speed and accuracy.

---

Alright, let's get started!

## Equal Proof agreement, purely decentralized network validation repartition
These are the original implementations, there are many kinds of agreement that occur depending on the specific protocol. 

The most wide-spread example of Equal Proof agreement is Proof of Work (PoW), used by protocols like [Bitcoin](https://medium.com/@BlockchainDeal/bitcoin-info-sheet-d9bad20800fd) and [Ethereum](https://medium.com/@BlockchainDeal/ethereum-info-sheet-cccaa21b9a6b). It relies on block ***mining***, which is a term used to describe the computational work load necessary to achieve block validity. It is common to have pools of contributing miners to solve the increasingly difficult puzzles required for validation. Block miners are rewarded with a standardized amount of coins for every block. The difficulty adjustment ensures the reduction of inflation relative to the total amount of blocks, thus increasing the coin's value over network use (time).

The criticism regarding Proof of Work is related to the increase in energy requirements as the puzzles get harder. This leads us into the development of more energy-efficient agreement, notably Proof of Stake (PoS). It maintains block validation by ensuring that accounts wanting to mine are instead required to lock up a desired amount of coins from their balance, increasing their chance of being selected to mine a block.

For an example of a protocol using such agreement, see [NXT](https://nxtplatform.org/).

Proof of Stake generally makes use of Proof of Work for the initial issuance of coins from mined blocks, then gradually shifting the proof load towards stakeholders instead of miners, thus making staked coins a more valuable economic resource than mining (hardware, energy) for validation. Another popular approach for the initial coin supply issuance is to mint coins to investors through fundraising.

## Delegated Proof agreement, concentrated network validation with economic incentives
The problem with PoS is that in most implementations, there is a lack of cost for participating poorly in the validation process. It is trivial to simply not mine a block when selected as the next miner, thereby delaying the entire network in terms of transactions per second (TPS). This is an important factor in the development of delegated agreement, as seen in Delegated Proof of Stake (DPoS) - with [Ark](https://github.com/ArkEcosystem/docs/blob/master/general/01_WhatIsARK/01_WhatIsArk.md) - or Delegated Byzantine Fault Tolerance (DBFT) - with [NEO](http://docs.neo.org/en-us/index.html).

Both of these agreement structures rely on the delegation of a specific number of peers, through the use of votes with coins or other symbols, whom gain privileges when in power. For every delegation cycle, the delegates are in charge of ***forging*** blocks. A greater speed is achieved in these two implementations, considering that it is unlikely for a delegate to remain in power after acting poorly towards the other peers and the lack of significantly time-consuming computations.

Mainly, the two just outlined agreement solutions differ in terms of their respective validation process. In the Proof of Stake version, the delegates are randomly selected to forge blocks on a turn basis, whereas in Delegated Byzantine Fault Tolerance the required number of delegates must validate every new block for it to be forged. The forged block is considered increasingly valid every time another block is added to the chain in DPoS. In DBFT, the block is considered valid as soon as the minimum number of delegates (typically 2/3 +|-1) agree on its validity.

There are valid points to be made for holding a more centralized structure for agreement as seen with delegation: having closer physical relationships between delegates can increase network speed in the case of DBFT and, in both cases, network participants benefit from the increased incentive for delegated peers to act properly.

## Network Incentive agreement, cultivation of healthy network participation habits
Some argue that centralization is what peer-to-peer technology is made to avoid. This emphasizes the development of novel solutions for agreement which don't rely on economic resources or delegated peers - which use intrinsic protocol-level settings to guide peers; something like Federated Byzantine Agreement (FBA) and Tangle - native to [Stellar]() and [IOTA]() respectively.

Agreement in FBA is reached gradually, through the use of a network of trusted peer groups, or quorums. The network itself operates on rules that can be changed through voting with the coin. A quorum is the term used to define a group of peers through which a single member is able to gather block validity information. The members themselves are not required to validate blocks, but they could be left out of being included in certain quorums which validate every block if they are found to propagate faulty ones. It is therefore in the peer's best interest to exude a standard level of truth through its trust affiliations and validation procedures.

IOTA, on the other hand, requires every new transaction to endorse two prior ones and creates a Tangle of trust rather than a Blockchain. Transactions are graded with a weight: a combination of the weight of transactions is directly or indirectly validates and the weight of transactions endorsing it.

## Permissioned Ledgers, enterprise solutions and hierarchical design of distributed computing
Many networks have emerged which offer similar functionality to the open ledgers reviewed. The permissioned distributed ledgers are orchestrated much like traditional enterprise networks which make use of clearance levels, individual-or-group specific responsibilities and identity management. These are important to understand because they are inspired by open protocols, often innovating upon them, and offer alternative means to manage distributed networks.

The core functionality of a permissioned ledger is basically the same as any other distributed network, the main differences being how identity, rights and responsibilities are shared across peers - e.g. in many implementations, a specific peer class is responsible for creating an order of transactions in a block and to propagate it, while others verify those transactions and decide whether or not they commit them to the chain as being valid.

This kind of structure has a few spin-offs, notably: Practical, Simplified and Redundant BFT; each describing a different set of procedures to follow for the maintenance of a healthy Blockchain.

Perhaps the most significant approach to solving efficient peer-to-peer networking from a permissioned standpoint is, in which validation occurs through the simulation of other peers' votes. The role of the protocol is ensuring peers have access to what other peers have access to, this is called gossip and is made redundant. Effectively, an entire peer's collection of information about other network members is the basis for establishing whether or not this peer will endorse a given transaction, and this can all be calculated locally (given the information about the peer is up-to-date).

Permissioned ledgers are often marketed as having higher TPS than open ledgers, however this is mainly due to the reduction of the need to have a heavy confirmation weight from subsequent transactions or block. There is no intrinsic protocol improvement for these kinds of ledgers, they instead rely on the probability of having an army of good soldiers. This can be suitable for networks with high accountability and repercussions for bad behavior, but it fails when applied to a broader audience of individuals because the improved speed is only a result of the lack of bad acting and few peers.

## Further implications
As detailed, the many existing solutions for solving consensus in peer-to-peer networks are often individually similar and offer trade-offs when compared to one another. There are novel innovations claiming to be superior, though the natural evolution of agreement tends to flow between existing implementations and they are subject to improve or adapt then adopt each other's structural advantages when needed.

Depending on the specific case, a particular option is more suitable than another. In a scenario where the goal changes frequently, a network equipped with the functionality to fundamentally alter its underlying agreement mechanism is likely to be a long-lasting solution.


----------------
[contributor information](./assets/info)

