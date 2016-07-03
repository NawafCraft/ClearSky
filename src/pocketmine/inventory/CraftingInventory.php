<?php
namespace pocketmine\inventory;

/**
 * Manages crafting operations
 * This class includes future methods for shaped crafting
 *
 * TODO: add small matrix inventory
 */
class CraftingInventory extends BaseInventory{

	/** @var Item */
	private $resultItem;

	/**
	 * @param InventoryHolder $holder
	 * @param InventoryType   $inventoryType
	 *
	 * @throws \Throwable
	 */
	public function __construct(InventoryHolder $holder, InventoryType $inventoryType){
		if($inventoryType->getDefaultTitle() !== "Crafting"){
			throw new \InvalidStateException("Invalid Inventory type, expected CRAFTING or WORKBENCH");
		}
		parent::__construct($holder, $inventoryType);
	}
	
	public function setResultItem(Item $item){
		$this->resultItem = $item;
	}
	
	/**
	 * @return Item
	 */
	public function getResultItem(){
		return $this->resultItem;
	}
}