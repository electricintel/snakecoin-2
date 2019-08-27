<?php


// Define the Block Class
class Block {
 function __construct($index, $data, $previousHash) {
    $this->index = $index;
    $this->timestamp =  time();
    $this->data = $data;
    $this->previousHash = $previousHash;
    $this->hash = $this->generateHash();

  }

  function generateHash() {
    return hash('sha256', $this->index.$this->timestamp.$this->data.$this->previousHash); 
  }
}

// Create genesis block
function createGenesisBlock() {
  return new Block(0, 'Genesis Block', '0');
}

// Create all other blocks
function createNextBlock($previousBlock, $data=null) {
   $index = $previousBlock->index + 1;
   $previousHash = $previousBlock->hash;
  return new Block($index, $data, $previousHash);
}

// Demo
 $blockchain = [createGenesisBlock()];
 $previousBlock = $blockchain[0];

for ($i=0; $i<20; $i++) {
   $block = createNextBlock($previousBlock);
   array_push($blockchain,$block);

  $previousBlock = $block;

  echo "Block #".$block->index." has been added to the blockchain!\n";
  echo "Hash:".$block->hash."\n";


}