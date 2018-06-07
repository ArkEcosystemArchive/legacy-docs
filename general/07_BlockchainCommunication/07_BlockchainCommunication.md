# Blockchain Communication
To maintain a healthy peer-to-peer network like those empowered by distributed Blockchains, it is important to have a secure and fault tolerant network communication implementation.

On a broad level, there can be many different kinds of users interfacing with the network; some will do so via third-parties and won't have direct access to peer-to-peer communication, while others will actively participate in various network tasks - like transaction and block propagation or general validation. Therefore, many peers will be required to be connected through internet ports and utilize clearly defined protocols to execute necessary tasks.

The principal function of a third-party client is often to manage a user's account actions. This requires the service employed by the user to have access to an updated version of the Blockchain to promote reliable operability. For example, if a web form is used on the third-party client to create a transaction, that client then becomes responsible of sharing this transaction with other peers - typically by forwarding it to its Blockchain peer server(s) - for it to be added to a block and validated.

Once a transaction is created and propagated, the consensus mechanism used determines the further steps that should be taken to properly follow the network (Blockchain) protocol. There are many variations for creating blocks and some implementations even disregard blocks entirely by using transactions themselves as the validated bases for the ledger.

In a more centralized ledger, where the validation process is executed by a smaller proportion of peers, the transaction must initially be routed efficiently to the responsible nodes. Sometimes there is a delegated node that a particular peer is required to share transactions they encounter with. In a decentralized structure, the speed at which a transaction has a chance of being validated (added to a block and further confirmed with future blocks in the sequence) is dependent on its availability to validating peers like miners.

In any case, the initial transaction data is shared through peer-to-peer protocols to the nodes responsible of validation and block creation, then the block goes through the same peer-to-peer protocol to be propagated as the newest one in the Blockchain and confirmed to be valid by other peers' acceptance of it.

The number of steps often varies and there can be many sub-groups of confirmation queries executed between peers, validating peers, clients and users to complete the cycles required to appropriately use the Blockchain.

In short, the communication necessary in Blockchain networks is handled by many levels of networking layers which are each tailored to a specific need. This enables developers and users to interact with familiar interfaces and reduces learning overhead. The actual underlying data exchanges in Blockchain communication vary depending on the particular intricacies of the given Blockchain.

----------------
[contributor information](./assets/info.md)