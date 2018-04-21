Blockchain protocols can be confusing at first. This quick guide shows the basics of how communication occurs in a peer-to-peer network using a forged Blockchain to record transaction history.

### Requirements
First and foremost, one needs an account to send and receive transactions on the network. An account includes a private key and a public key. The private key is used to sign transactions from the account, while a public key is the address to which others send funds to the account.
![Account][account]

Secondly, an appropriate compatible wallet is required to perform network functions like sending the transaction to a peer, who can then validate and broadcast it across other members of the network. 

The network takes care of bringing the transaction to a pool of transactions from which nodes forge blocks. Once a block is forged, it is broadcast across the network similarly to a transaction, but this time it gets added to every peer's record of the Blockchain.

This type of architecture allows anyone in the network to download a copy of transactions and create elegant interfaces to browse the history of the network's states or changes, this way even people with no accounts can make use of the Blockchain's underlying data.

### Writing
To begin sending a transaction, one enters the recipient public key and amount of funds to send in the application.

### Signing
A message, in this case a transaction, needs to be cryptographically confirmed as authentically written by the owner of the private key associated with the account.

### Sending
A connection to peers is required to propagate the signed transaction through the network. Peers are continuously querying each other and sending new data to one another through internet protocol ports.

### Validating
A peer's role, at this stage, is to validate that the transaction doesn't contravene with the current state of affairs. When a peer faces different versions of a transaction, the one that was first received is determined valid by the peer.

### Broadcasting
Validated transactions get passed from peer to peer through their mutual connections. The broadcasting of the transaction enables the global transaction pool to grow steadily.

### Forging
A responsible node takes transactions straight from the pool that was built from peer to peer broadcasting. Always respecting the consensus mechanism, transactions are added to an immutable block which the node signs into existence.

### Blocked
The block is a collection of transactions which travels through the network much like a transaction. The block containing the original transaction and many others is added to every peer's Blockchain gradually through networking.

* * *

In many Blockchain-based protocols, the transaction can be considered complete when the block that contains it has been transmitted to enough peers and is followed by other agreeable blocks.

[account]: ./assets/png/account.png