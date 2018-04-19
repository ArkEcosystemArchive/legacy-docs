# Blockchain Consensus Mechanisms
With Blockchains and Distributed Ledgers, we have seen new kinds of consensus mechanisms which enables a decentralized to trust and validation on a large scale.

These protocols are made to be resilient to issues that can arise from the distributed nature of the network they serve. In a Byzantine Fault Tolerant system, the inconsistency of peers' prime status and the possibility of data channels being compromised are countered by smartly structured consensus mechanisms.

In the beginning, distributed ledger history validity consensus became possible with the concept of proof of work. Then, the mechanism evolved to be more energy efficient, instead using economic incentive to validate records: proof of stake was born. At last, a need for faster protocols gave way to delegated proof of stake — electing with financial weight.

The three primary consensus mechanisms all provide a degree of trust that is necessary to operate fearlessly in a peer-to-peer distributed ledger.

# Proof of Work
The original consensus mechanism used in the [Bitcoin] protocol, proof of work, allows validating peers (miners) to weigh their vote with computational power.

The valid block structure is obtained from combining a collection of transactions, the last block’s header and a nonce. The nonce is the variable part of the equation, it must be changed and tested until the block has the required properties. These calculations are what guards the network from double spending problems or other malicious acts.

To repeatedly affect the network negatively, a collection of peers would need to collude with over half of the network’s power. Further, a reward is given to miners in proportion to their computational contribution, which reduces the incentive to corrupt the network and potentially reduce the value of the coin.

# Proof of Stake
A more recent advancement in distributed computing consensus mechanisms, proof of stake (PoS), uses the validating peer’s economic stake in the network to calculate the weight of the peer’s vote, as seen originally with [Peercoin].

The validator aggregates the transactions to create the block, he then sends himself a specified target amount of coins in a transaction in that same block to prove stake and signs the block. The target amount of coins is proportional to the total amount in transactions within the block and is adjusted based on the supply of staked coins, allowing stable block times.

A large part of the funds attributed to validation have to be in control of the attacker for successful falsification of the ledger, making it financially expensive to execute. Attacking is an unattractive prospect; failure yields a net cost in capital and repeating the attack after a recovered network would still require more capital.

# Delegated Proof of Stake
In delegated proof of stake, voters enable a fixed number of delegates to forge blocks by electing them with coins. Representatives can participate in creating valid blocks in the chain.

This is the consensus mechanism used by [Ark].

Maintaining a distributed set of actors with specific jurisdictions and high trust allows the transactions in a dPoS consensus Blockchain to flow with much higher speed. The validation process doesn’t depend on long computational puzzles and there are only a few peers that need to process changes to the ledger history.

A significant amount of collusion would have to occur between the elected members to maintain false records. They could then lose their delegate status and revenue from occupying this role.


-----------

There exists two principal kinds of applications for the protocols outlined: public and open networks of peers or permissioned ledgers.

Public and open networks function best with a high level of transparency and number of active nodes, whereas a permissioned ledger doesn't require the same balance. Confirming a transaction is very straight forward; get the verifiable data to whoever is in charge.

For a delegated proof of stake system, the network supply capacity of a single permissioned node is far greater than a proof of work node's share in the computing power. A more redundant path to validity ensures users of the network always keep the time to confirm at a minimum in exchange for possible errors in computation that could be buried and nullified by a more extensive group of validators. Traditional proof of stake has reduced redundancy by randomly selecting from a larger pool of peers.

1. Tx is broadcast to a peer
2. Peer broadcasts to other peers or randomly or directly to delegate based on mechanism
3. The valid block containing the transaction is found or forged
4. The block is sent to other peers or validators or bookkeepers

[ark]: https://ark.io/Whitepaper.pdf 'Ark whitepaper'
[bitcoin]: https://bitcoin.org/bitcoin.pdf 'Bitcoin whitepaper'
[blackcoin]: https://blackcoin.co/blackcoin-pos-protocol-v2-whitepaper.pdf 'Blackcoin whitepaper'
[peercoin]: https://peercoin.net/whitepaper 'Peercoin whitepaper'
