# Blockchain Consensus Mechanisms
With Blockchains and Distributed Ledgers, we have seen new kinds of consensus mechanisms which enable a decentralized network validate transactions.

These protocols are made to be resilient to issues that can arise from the distributed nature of the network they serve. In a Byzantine Fault Tolerant system, the inconsistency of peers' prime status and the possibility of data channels being compromised are countered by smartly structured consensus mechanisms.

Many Blockchains exist, some of them similar and others unique in what they can provide to network participants. The first protocols mainly relied on Proof of Work to establish conensus among nodes. This process being slow and energy intensive is what stimulated advancements in more energy and time efficient consensus models like (delegated) Proof of Stake or Federated Byzantine Agreement. There is also a range of other consensus mechanisms which are often used for a small subset of Blockchains like Proof of Capacity, Proof of Burn or Proof of Elapsed Time. 

Each consensus mechanism has its advantages and drawbacks. The field is continuously evolving. It is important to get accustomed to these mechanisms; they enable trustless proliferation of data through distributed networks.

# Proof of Work
The original consensus mechanism used in the [Bitcoin] protocol, proof of work, allows validating peers (miners) to weigh their vote with computational power.

The valid block structure is obtained from combining a collection of transactions, the last block’s header and a nonce. The nonce is the variable part of the equation, it must be changed and tested until the block has the required properties. These calculations are what guards the network from double spending problems or other malicious acts.

To repeatedly affect the network negatively, a collection of peers would need to collude with over half of the network’s power. Further, a reward is given to miners in proportion to their computational contribution, which reduces the incentive to corrupt the network and potentially reduce the value of the coin.

Proof of Work is designed to be inherently decentralized, however there is a rather high barrier to entry for having a noticeable impact on the validation process of the network. Major hardware costs are needed to mine competitively, which leads to a more centralized distribution of power.

# Proof of Stake
A more recent advancement in distributed computing consensus mechanisms, proof of stake (PoS), uses the validating peer’s economic stake in the network to calculate the weight of the peer’s vote, as seen originally with [Peercoin].

The validator is attributed a period to aggregate transactions to create the block, it then sends itself a specified target amount of coins in a transaction in that same block to prove stake and sign the block. The target amount of coins staked to proceed with the block creation is proportional to the total amount in transactions within the block and is adjusted based on the supply of staked coins, allowing stable block times.

A large part of the funds attributed to validation have to be in control of the attacker for successful falsification of the ledger, making it financially expensive to execute. Attacking is an unattractive prospect; failure yields a net cost in capital and repeating the attack after a recovered network would still require more capital. In case of success, the currency is then at risk of severe devaluation.

Centralization can arise when the funds are concentrated in a few stakers' wallets. There is however a significantly small barrier to entry in terms of technical skills. Many people can easily get together and stake their coins under a same node if they don't have the required minimal amount to stake by themselves.

# Delegated Proof of Stake
In delegated proof of stake, voters enable a fixed number of delegates to forge blocks by electing them with coins. Representatives can participate in creating valid blocks in the chain.

This is the consensus mechanism used by [Ark].

Maintaining a distributed set of actors with specific jurisdictions, in this case evenly divided windows to forge blocks, and high trust allows the transactions in a dPoS consensus Blockchain to flow gracefully. The validation process doesn’t depend on long computational puzzles and there are only a few nodes needing to process changes to the ledger history. The forged blocks are passed to peers in the network who can then participate in broadcasting the newly created blocks.

There is little incentive for delegates to collude in maintaining falsy records. The functionality embeded in each node, even simple peers, prevents the inclusion of successive bad blocks. Forging a contravenous block would result in immediate flagging of the delegate in the network and following consequences for bad behaviour.

DPoS tends to lend way to a rather centralized repartition of power in a given network. Although from a protocol standpoint there is no advantage given to any node, the project structure often benefits early adopters and people who already have a large capital reach. There are several attempts at reducing the potential weight of a voter based on its total stake held, necessiting more evenly spread out votes to maintain its influence.

# Proof of Elapsed Time
A relatively unknown consensus mechanism, Proof of Elapsed Time, relies on a dedicated piece of hardware which can ensure the safety of code computation and thus its validity.

Hyperledger [Sawtooth] uses PoET consensus.

This mechanism leverages Intel's Software Guard Extensions (SGX) to ensure that each validator in the Blockchain network waits a random amount of time before being granted validation rights. When a participant has finished waiting for this random period, they are allowed to mine the next block. The reliability of the hardware is what determines the safety of this network. There is little benefit from having a smaller or larger number of nodes. This structure is best suited for permissioned Blockchains, because only approved validator nodes are included in the selection equation and there is often only a single trusted node in charge of attributing the waiting times to validators.

There would need to be a substantially faulty random number generator at the core of the issuing CPU logic to generate predictable patterns in the way validators are allowed to mine blocks. Since there is little incentive to have a faulty node that you've personally permissioned on the network, the problems that can arise are mainly due to the potential exploitability of the structure of this consensus mechanism which is similar across all its implementations.

This mechanism is a respectful representation of a centralized Blockchain. Sawtooth doesn't need to be very evenly distributed because of the permissioned nature of its intended use case. If this was meant to be used in a global protocol, it probably wouldn't be used at all.

# Proof of Burn
Proof of Burn is a unique kind of innovation that relies on the node burning Proof of Work issued coins to increase their chances at being selected for mining the next block.

The initial coin using this mechanism is [Slimcoin].

The coins are effectively burned by sending them to a verifiably unspendable address. This exposes naturally configurable coin supply scarcity and ensures the miners are exchanging something valuable for their right to participate in the validation process.

The risks involved are similar to Proof of Stake. In both mechanisms there is a possibility of mining false blocks and propagating them, but gaining the right to even mine a block costs a lot of coins and an attack can be spotted by other nodes and remove from the Blockchain very reliably.

There is no intrinsic centralization with PoB, although there is more power in the hands of nodes with a higher effective burned coin rate, i.e. nodes with more capital tend to dominate the validation process.

# Proof of Capacity
In the Proof of Capacity consensus mechanism, nodes are required to commit storage space to being unused in exchange for the possibility of mining blocks.

Nodes interested in mining are required to plot their storage capacity with a set of randomly generated nonces which are computed passively and yield a sequence of waiting periods. At the end of every waiting period, the node has the right to mine the block if no other block has mined for that specific window. If two validators produce a block for the same window, a soft fork occurs much like in other consensus mechanisms, leaving one of the histories behind to the benefit of the other, often first, mined block.

The expected decentralization granted by PoC comes from the fact that it would be relatively inefficient to purchase storage capacity only to mine blocks. Participants will make use of older hardware they have laying around or devices with unused memory storage. There is an incentive to develop more cost effective solutions for storage, but this would be a welcomed advancement.

# Proof of Authority
Mainly used as a hypothetical comparison point, Proof of Authority refers to the validator's identity being at stake as the main deterrent of bad action.

Transactions can flow quickly in PoA, as there are only a subset of nodes that are required to process them and they can work in tandem. These kinds of protocols are best suited for permissioned ledgers and most likely won't be used in public blockchains due to the ease of refining this consensus. There already exist similar mechanisms that bother from the underlying logic of Authority Proof.

The risks involved in a network with transactions or blocks being validated by only a small subset of nodes is mainly attached to the possibility of them being corrupted. This problem can occur voluntarily (maliciously) or due to software errors which can cause faulty behaviour or downtime in the network.

On the scale of centralization, this kind of approach to consensus relies on a small set of people who are proven to have an incentive to participate positively in the stability of the network; this means there is an inherent risk of collusion due to each participant's relative proximity from a practical standpoint.
# Proof of Integrity

# Federated Byzantine Agreement

There exists two principal kinds of applications for the protocols outlined: public and open networks of peers or permissioned ledgers.

Public and open networks function best with a high level of transparency and number of active nodes, whereas a permissioned ledger doesn't require the same balance. Confirming a transaction is always very straight forward: get the verifiable data to whoever is in charge.

For a Delegated Proof of Stake system like Ark's, the network supply capacity of a single permissioned node is far greater than a Proof of Work node's share in the computing power. A more redundant path to validity ensures users of the network always keep the time to confirm at a minimum in exchange for possible errors in computation that could be buried and nullified by a more extensive group of validators. Traditional Proof of Stake has reduced redundancy by randomly selecting from a larger pool of peers.

# Delegated Byzantine Fault Tolerance
This algorithm, abbreviated dBFT, is mainly used by the Blockchain giant NEO (previously Antshares). It relies on delegated book-keepers to reach a threshold and establish blocks as being valid.

The voters use their coins to elect a set of nodes who are in charge of agreeing on whether or not blocks are valid. This mechanism provides a high level of finality, where once a block is validated there is no chance of it being obfuscated in the future; there are no forks. For Neo, the minimum number of book-keepers must be in accord regarding the block. This also accounts for nodes being unavailable or acting arbitrarily.

This mechanism is similar to dPoS, where the main difference relies on the block validation properties. In dPoS, the nodes with larger stakes have a higher chance of being awarded the right to mine a single block, whereas in dBFT consensus the book-keepers validate the blocks together. The risks of bad behaviour leading to a faulty ledger are reduced, as the validation process isn't up to a single node at a time.

This way of agreeing on the history of blocks poses centralization issues in the sense that there is an elite group of people who are responsible for maintaining the ledger. The risks of fraudulent behaviour could be high depending on the initial repartition of wealth.
# Simplified Byzantine Fault Tolerance

# Redundant Byzantine Fault Tolerance

# Tangle

# Yet Another Consensus

[ark]: https://ark.io/Whitepaper.pdf 'Ark whitepaper'
[bitcoin]: https://bitcoin.org/bitcoin.pdf 'Bitcoin whitepaper'
[blackcoin]: https://blackcoin.co/blackcoin-pos-protocol-v2-whitepaper.pdf 'Blackcoin whitepaper'
[peercoin]: https://peercoin.net/whitepaper 'Peercoin whitepaper'
[sawtooth]: https://sawtooth.hyperledger.org/docs/core/releases/1.0/introduction.html 'Hyperledger Sawtooth introduction'
[slimcoin]: https://github.com/slimcoin-project/slimcoin-project.github.io/raw/master/whitepaperSLM.pdf 'Slimcoin whitepaper'
