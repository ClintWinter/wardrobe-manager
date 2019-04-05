# wardrobe-manager

## Todo List

* Look into authentication from Laracasts to get that user's garments only, etc.
* Garments
    * ~Make deletes update "Delete" column in DB~
    * ~Index should only get garments that weren't "Deleted"~
    * Image uploads for garments
        * Template images that allow a selectable color for it.
    * A garment can match with other garments
    * A garment
* Outfits
    * All basic routes

What is the essence of this project?
-Adding your wardrobe and randomly generating outfits on a daily basis
-Save the time of the user by choosing their outfit for them.

There should probably be a template outfit where boxes can be filled (essentially). 
Thinking of it like an RPG character where you equip items and gear.

We have...
* a top (under layer, middle layer, outer layer)
* a bottom (1 layer)
* socks
* shoes
* Accessories (scarf, gloves, hat)

Garments should be allowed to be active or inactive based on user discretion (or maybe based on weather?)
Shorts are inactive during winter/fall or maybe at a certain temperature.

Garments should probably be able to be categorized by where they are appropriate (tags).
People can make a category called "work" and tag whatever garments they think are appropriately worn to work with it.

Maybe they can choose to generate a work outfit and it uses those garments.
Maybe they can schedule it to auto-generate and notify them of their outfit on dates/times of their choosing. (Like the clock on the phone (Monday to Friday at 8:00 AM send an email with their outfit)).

Maybe we don't just yet allow them to create their own outfits, but instead the outfits are just a historical save of what has been previously generated for that user. So it has a time that it was generated, what garments compose it, maybe they can favorite/save it because they liked it.

We could probably allow the generator to also select favorited outfits.

We also want to remove clothes from the rotation that have been worn that week, or at least allow the user determine that.
Coats probably shouldn't be removed after 1 use in a week, so that would probably be toggleable.

This will also need to generate things like suits possibly. It might just be a table with a shitton of columns for every possible garment type.

Garments:
* GarmentID (PK)
* UserID (FK)
* Name (name of garment)
* Image (image of garment)
* Deleted
* Type (under top, middle top, bottom, shoe, etc)
* Active (currently in the mix to be generated in an outfit)
* WornCycleLength (Worn in a week before available again)
* WornCycleMax (# of times allowed to be worn in the cycle (default: 1))
* WornInCycle (# of times worn in the cycle)
* CreatedWhen
* UpdatedWhen

Tags:
* TagID (PK)
* UserID (FK)
* Name
* CreatedWhen
* UpdatedWhen

GarmentTag:
* TagID (PK)
* UserID (FK)
* Deleted
* CreatedWhen

Outfits:
* OutfitID (PK)
* UserID (FK)
* Deleted
* Favorite
* WornCycleLength
* WornCycleMax
* WornInCycle
* UnderTop
* MiddleTop
* OuterTop
* Bottom
* Shoe
* Sock
* Hat
* Scarf
* Glove
* Tie
* PocketSquare
* CreatedWhen
* UpdatedWhen