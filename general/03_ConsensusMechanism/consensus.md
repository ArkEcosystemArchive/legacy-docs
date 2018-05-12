# Consensus Mechanisms
There is a multitude of mechanisms used in Blockchain protocols to maintain a valid state in the ledger, some more common than others.
In this (document,post,article), we review a wide range of algorithms so you can familiarize yourself with many different kinds of consensus mechanisms.

For simplicity, we will use the term "agreement" when referring to the underlying algorithm or mechanism of peer-to-peer protocols including but not limited to Blockchains.

Now, it is important to take note of the temporal progression relating to the advancement and improvement of various agreement systems for distributed networks. Many are variations on previous existing and tested solutions, and every single one most definitely borrows some of its core design from past works.

Before we dive into the various categories and break them down in detail, let us iterate quickly the problem we're trying to solve with all of these implimentations.

## Byzantine Agreement
The problems that occur most often in a network of decentralized peers, where the power structure can be split between its members, are often referred to as being solved through Byzantine Agreement (BA). This nomanclature comes from a popularized decision-making problem that arises when any number of peers (or nodes) in an army (or network) have the potential to act arbitrarily and potentially cause harm to other members of the group - the [General's Problem](https://en.wikipedia.org/wiki/Byzantine_fault_tolerance). A network which can successfully prevent issues arrising from bad actors and node unavailability is said to be Byzantine Fault Tolerant (BFT). As many of your know, Bitcoin is claimed to be the first proven application of such category in modern times.

## Basics
Before exploring agreement styles, one should be familiar with the general flow of decentralized ledgers like Blockchains. Typically, accounts have a pair of keys, one used to recieve coins and the other to send them. The members of the network often have accounts and are connected to other peers. The peer's role is to propagate data, like transactions, to other peers. Peers can optionally participate in creating blocks of transactions which could be added to the chain, depending on agreement.

That's it.

The various kinds of agreement that come with different protocols are in most cases results of trade-offs and optimizations regarding decentralization, speed and accuracy.
---

Alright, let's get started!

We separate the categories as follows:
- [Open ledgers]()
- [Permissioned ledgers]()
- [Odd innovations]()

Briefly: open ledgers are public protocols where all blocks can be viewed by anyone holding the Blockchain history, permissioned ledgers make use of different clearance levels for structured responsibilities, and odd innovations are implementations of either kind which are unique.

Don't forget that  agreement algorithms can be very similar across categories, yet the agreement flow will differ based on the power structure of the network.

## Open Ledgers
These are the original implementations, there are many kinds of agreement that occur depending on the specific protocol. 

The most wide-spread example of open ledger agreement is Proof of Work (PoW), used by protocols like Bitcoin and Ethereum. It relies on block mining, which is a term used to describe the computational work load necessary to achieve block validity. It is common to have pools of contributing miners to solve the increasingly difficult puzzles required for validation. Block miners are rewarded with a standardized amount of coins for every block. The difficulty adjustment ensures the reduction of inflation relative to the total amount of blocks, thus increasing the coin's value over network use (time).

The main criticism regarding Proof of Work are related to its ascending energy requirements as the puzzles get harder. This leads us into the development of more energy-efficient agreement, notably Proof of Stake (Pos). It maintains block validation by ensuring that accounts wanting to mine are instead required to lock up a desired amount of coins from their balance, inreasing their chance of being selected to mine a block.

Proof of Stake generally makes use of Proof of Work for the initial issuance of coins from mined blocks, then gradually reducing the block reward making staked coins more valuable than mining hardware for validation.

The problem with PoS is that in most implementations, there is a lack of cost for participating poorly in the validation process. It is trivial to simply not mine a block when selected as the next miner, thereby delaying the entire network in terms of transactions per second (TPS). This is an important factor in the development of delegated agreement, as seen in Delegated Proof of Stake (DPoS) - with Ark - or Delegated Byzantine Fault Tolerance (DBFT) - with NEO.

Both of these agreement structures rely on the delegation of a specific number of peers, through the use of votes with coins, which gain privileges when in power. For every delegation cycle, the delegates are in charge of *forging* blocks. A greater speed is achieved in these two implementations, considering that it is unlikely for a delegate to remain in power after acting poorly towards the other peers.

Mainly, the two recently outlined agreement solutions differ in terms of their respective validation process. In the Proof of Stake version, the delegates are randomly selected to forge blocks on a turn basis, whereas in Delegated Byzantine Fault Tolerance the required number of delegates must validate every new block for it to be forged. The forged block is considered increasingly valid every time another block is added to the chain in DPOS. In DBFT, the block is considered valid as soon as the minimum number of delegates (typically 2/3 +1) agree on its validity.

There are valid points to be made for holding a more centralized structure for agreement as seen with delegation. Having closer physical relationships between delegates can increase network speed in the case of DBFT and, in both cases, network participants benefit from the increased incentive for delegatd peers to act properly.

In contrast, some argue that centralization is what peer-to-peer technology is made to avoid. This emphasizes the development of novel solutions for agreement which don't rely on economic resources or delegated peers; something like Federated Byzantine Agreement (FBA) - native to Stellar.

This one's a bonus, you can head to Permissioned Agreement.

With the use of redundant quorums, agreement is reached to varying degrees based on the relationship between every peer in FBA. A peer has a chosen set of trusted peers from which it gathers its valid blocks and is in turn part of another peer's quorum. Some peers verify the blocks which are validated by their quorum, but are not required to as the peer's quorum it is a part of could itself verify the block and remove its trust in a peer propagating an invalid block.

As you can see, there are many interesting ways people have integrated into network protocols for dealing with vast reaches and open access.

If you've made it here and still have thirst for more, check out the following:
- Proof of Capacity makes use of *plotted* storage space to allow the peer to mine a block every calculated time period;
- Proof of Burn is the sacrificing of coins to increase block mining chance;

## Permissioned Ledgers
The name says it all: permissions are granted to specified peers in a Permissioned Ledger to maintain trust and restrictions in a familiar way.

These networks are orchestrated much like traditional entreprise networks which make use of clearance levels, individual-or-group specific responsibilities and identity management.

Goals sought by these solutions are very simple:
1. Maintain a clear, verifiable history
2. Adjust the agreement structure to suit per-case needs
3. Improve upon existing distributed computing models

So, let's touch on how agreement is reached in this different category of ledgers.

The previously mentionned interchangeability between open and permissioned protocols can be demonstrated by examining another Byzantine Fault Tolerant design: Practical Byzantine Fault Tolerance (PBFT).

PBFT is used in Hyperledger Fabric, which is an entreprise Blockchain framework supported by the Linux Foundation. In Practical BFT, the transactions issued by peers must be verified and signed by a minimum amount of Endorsers, then made into a block by a single dedicated Orderer. Once the ordered block has been created, another group of participants -- committing peers -- take charge of verifying that the changes proposed by the endorsed transactions still apply to the current state of the Blockchain. The committing peers will each individually push the block containing a collection of valid and invalid transactions to the ledger, based on the last verification step.

Another approach very similar to PBFT is SBFT, or Simplified Byzantine Fault Tolerance. The transaction is initially sent to a peer and forwarded to the ordering service if valid. The ordering service creates proposals from transactions, then sends them to committing peers. The ordering service is also in charge of determining an order for the committers, one of them being the leader, for vote collection and proposed block validity agreement.

Chain (the company) is an example of a framework that uses SBFT. They are in charge of developing Blockchains for international fintech corporations like card processors and banking institutions.

An interesting adaptation of Simplified BFT is Redundant BFT, where every committing peer performs the leader's task even if they're unappointed. The fastest peer is awarded the position of leader until it is outpaced by another committing peer who holds a newer block. This mechanism ensures, with an extra check, that the speed of committing is always at its highest potential. A framework making use of this flow is Hyperledger Indy.

That's a lot of Hyperledger! And even more Byzantine Fault Tolerance... 

The underlying processes between these three presented solutions are very similar -- trading here and there to maximize speed or increase accuracy.

One example of a more decentralized agreement alternative is Proof of Elapsed Time, which is only used by Sawtooth... another Hyperledger framework. What's special about this framework is its use of a group of validators who are randomly appointed a time period to wait before being granted authoritatize status by a secured, proprietary CPU chip instruction set, called SGX, made by Intel. Out of the permissioned solutions, this one is best suited for configurable open networks shared between multiple organizations - i.e. supply chains.

Identity management is done in various ways accross these implementations:
- Sawtooth makes use of *settings* transactions, instantiated through validation
- Chain has user roles which are modified programmatically through APIs (Application Programming Interface-s)
- Iroha standardizes user interaction in the classes of: clients, peers and orderer
- Fabric utilizes a pluggable Membership Service Provider which can live on-chain or act as an oracle

