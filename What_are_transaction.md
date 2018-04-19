# What are transactions and how do they relate to blocks
![Transactions overview](https://github.com/dustindreifuerst/docs/blob/Peers_nodes/assets/img/ARK%20TRANSACTION%20NO%20WATERMARK.png)

## Transactions

A transaction is the transfer of data from one user to another through the blockchain network that they are using.  A basic transaction usually includes information such as value sent (asset price), ownership information, time and a transaction identification number.  Transactions will also reference prior outputs and create new inputs.  

For example when Dustin received 100 ARK from Susan yesterday, the transaction to Dustin would have an output from Susan referencing the 100 ARK, now as an input to Dustin’s wallet.  One week later when Dustin wishes to send that same 100 ARK to Jim, his wallet will reference that output from the transaction from Susan in the input of his sending transaction to Jim.  The beauty of blockchain is that it is transparent; since all transactions are not encrypted it is possible to view every transaction on a blockchain network.

When Dustin goes into his wallet and initiates the transaction to Jim for 100 ARK after he presses "send" the transaction is sent out to the network and individual nodes will check the prior history of inputs and outputs from Dustin’s wallet to ensure that he has the ability to send the 100 ARK to Jim.  Once this is verified by enough nodes who check their copy of the blockchain, the transaction is bundled with other transactions into a **Block**.  For more information on nodes refer to our section on [**Peers and Nodes, what are they and what is their role in the network?**](http://ark.io/)


## Blocks

When multiple transactions are verified by nodes on the network they are then bundled into blocks of transactions that are then verified by miners.  Blocks are the permanent record of transactions on a blockchain network.  They can never be changed or edited; This allows for a counterfeit/tamper proof record of transactions, something seemingly impossible until recently.

In a traditional proof of work (POW) system such as Bitcoin, miners would conduct computationally intensive problem solving to unlock and then verify the blocks of transactions on the network.  Once a miner finds and verifies a block they signal to the network proof of their work and wait for a majority of the network to agree.  Once consensus is reached that block is written permanently, along with all transactions inside, into the blockchain and can never be changed.  For this work miners are rewarded a specific number of bitcoins along with any transaction fees associated with the transactions in the block.  

The ARK network differs slightly in that it does not us a proof of work (POW) system, but instead what is called delegated proof of stake (DPOS).   In a DPOS system network integrity is ensured not through costly and high power consuming computer hardware, but through trust of the users in the network.  Individuals in the ARK community vote for delegates and those with the 51 highest total number of votes are considered "forging delegates".  These Forging delegates verify blocks of transactions, writing them into the ARK blockchain as well as forge new ARK in blocks at a rate of 2 ARK every 8 seconds.
For more information on DPOS/delegates refer to our section on [**What is DPOS and how it relates to other consensus mechanisms**](http://ark.io/)
