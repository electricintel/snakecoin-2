# SnakeCoin

A minimal BlockChain implementation in PHP

In an [article on dev.to](https://dev.to/aunyks/lets-build-the-tiniest-blockchain), Gerald Nash showed a simple blockchain implementation in less than 50 lines of Python 2 code, which he called SnakeCoin.

This is a port of the code from that article to PHP.

## Try It!

To run the demo, just type

    $ php snakecoin.php

The output will be similar to

    Block #1 has been added to the blockchain!
    Hash:30f5ac8ac7cf83d72e9f0a57bda7cff425d182689c089fe2f8524119a2604d40

    Block #2 has been added to the blockchain!
    Hash:1001fbb0a7fc789ca28efe6b33b0f145613dad607e564b7adaf5d1dc13ae4302

    Block #3 has been added to the blockchain!
    Hash:02034009a0727afc70a9d24e26420603be6844d6ded0277c73eea2c8057a0af4

    Block #4 has been added to the blockchain!
    Hash:24d64e50882971dfb04758ad1490a85d7c84896c00b15a2507cf26fc8f080419

    Block #5 has been added to the blockchain!
    Hash:c3e03cd381189d81d8cd3143aa1108ca1fc88509d610fec677dfc2ddd15334a7

    Block #6 has been added to the blockchain!
    Hash:974f2552a4d2489dd1bd226525fef0137aa2924444e14caaca1049055622f8fe

    Block #7 has been added to the blockchain!
    Hash:9e860f17571da5a259ae67744e3f79e8130cafb4449c2f7b4f6560c566a17147

    Block #8 has been added to the blockchain!
    Hash:486ab45f152d6b6486df1e44abfc23d7e352e6f796d5c10ada0d46fda850698c

    Block #9 has been added to the blockchain!
    Hash:56450f47d3ba6b293936c7b850124ddb58d5dbc6db7e86b4aa279fb52d7820b5

    Block #10 has been added to the blockchain!
    Hash:45faf97f04baa8fa9f5008297a4df2f1ad82bb33a218b6b6d8eea49224b48cec

    Block #11 has been added to the blockchain!
    Hash:f1f657dd05c9c27c75b9f131c82b4e0b84fa811429501e5ae8b71c55dbc40fe0

    Block #12 has been added to the blockchain!
    Hash:db3cef3b5c6ca0a114b0b75c3c980815c7fc4c18e3470b730ca68a1aa5671320

    Block #13 has been added to the blockchain!
    Hash:32a3563ae9e78a9db39fd91e529ed96d96abdc835de2d4cee2663c6c96e1f80f

    Block #14 has been added to the blockchain!
    Hash:cbd05f15b7958047ca86edcaf5835a504ebc6587596fe828f6e377aa2b5df89f

    Block #15 has been added to the blockchain!
    Hash:82548261f46de98b17413ab97ec84b89b1d48d8e016595825592235f8fd21538

    Block #16 has been added to the blockchain!
    Hash:5017641c5ca830edc377407d6aaca35390d5a84eb85bedb2fa310c08fce1aee8
    
    Block #17 has been added to the blockchain!
    Hash:9dbb15cbb1a0db9fd20678ddb22e6083417d61d8dfc6e9345130950c51440499

    Block #18 has been added to the blockchain!
    Hash:5fbe47e182ea7f7b38b09e6cf60708adc39c2da0ad8d25024baf05d761a1cbaa

    Block #19 has been added to the blockchain!
    Hash:02375df3e7f413972eb5fdd5f920954d382bd9b66b995c819d60eb9c0da4a50c

    Block #20 has been added to the blockchain!
    Hash:f51deadc72100e3db8e0010a8facbf06f28897c9ba40177147688d8fe658ac68


## Hashing

In this implementation, the `hash()` function is used
with the `SHA256` algorithm


