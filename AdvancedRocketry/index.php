<?php
    $title = 'Advanced Rocketry';
    
    $mainContent = ' <h2>Advanced Rocketry Documentation</h2><hr>
    <br />
    <p>Welcome to the documentation page for Advanced
        Rocketry!&nbsp; Now in Beta and releasing on ti... Who am I kidding, it\'ll be stable soon(TM)</p>
    <p>Advanced Rocketry is a Minecraft mod designed to add random or
        player specified planets to the game.&nbsp; These planets each have
        unique properties such as Atmosphere Density, Distance from the sun,
        Atmosphere composition, Average Temperature, and size.&nbsp; Players
        can build rockets out of blocks to travel to these other worlds.<br />
    </p>
    <hr>
    <h2>What\'s New?</h2>
    <a id="update-title" data-toggle="collapse" href="#update4x">1.4.x</a>
    <ul id="update4x" class="collapse show">
        <li>\'Secret\' hidden in-testing terrain generation option added to <a href="config/AdvancedPlanetConfiguration.php">Advanced
            Planet config</a>. As if nether terrain gen didn\'t lag bad enough</li>
        <li>Misc bugfixes</li>
        <li>More stuff I don\'t remember because it has been too long since I updated this page</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update3x">1.3.x</a>
    <ul id="update3x" class="collapse">
        <li>Overworld can now be Terraformed if enabled in the config</li>
        <li>Sealevel, water block type added to the <a href="config/AdvancedPlanetConfiguration.php">Advanced Planet
            config</a>.</li>
        <li><a href="blocks/Cables.php">Pipes and Cables are being removed and replaced with <a href="blocks/WirelessTransciever.php">the
            wireless transciver</a></li>
        <li>Many more bugfixes</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update2x">1.2.x</a>
    <ul id="update2x" class="collapse">
        <li>Oxygen vent has tracers so you can see where leaks occur</li>
        <li>So many bugfixes that I really need a nap</li>
        <li>There was that Halloween event that went horribly wrong... RIP 31/10/2017</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update23">1.2.3</a>
    <ul id="update23" class="collapse">
        <li>Fix satellites not working on moons</li>
        <li>Structure tower recipe now makes 8</li>
        <li>[1.10.2/1.11.2]fix bounding box on cables</li>
        <li>[LibVulpes] Fixed machines dissassembling again</li>
        <li>[LibVulpes] Fix IC2 handling unloading at the wrong time</li>
        <li>[1.11.2] Fix crashing with creative menu in the advanced rocketry tab</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update22">1.2.2</a>
    <ul id="update22" class="collapse">
        <li>Fix incorrect handling of recipes with multiple outputs in machines</li>
        <li>Fix rocket unloaders not working</li>
        <li>Number of machine blocks per recipe 4 => 16</li>
        <li>Removed circuit from IO board recipes in the prescision assembler so the recipes are actually useful</li>
        <li>Dropped tanks now retain fluid</li>
        <li>JEI now moves out of the way</li>
        <li>AR will now respect the initial spawn dimension setting in JED</li>
        <li>Fixed bug where having only one of each item in the station builder caused it to eat the items and not do
        anything</li>
        <li>Fix issue where docking pad does not show up in rocket UI if it is unnamed and the server has not
        restarted after placement</li>
        <li>Fixed placeholder in satellite builder UI</li>
        <li>Fixed moons not showing up in list in planet selection UIs</li>
        <li>Clicking planets to zoom in no longer resets selection to earth</li>
        <li>Fix lathe integration</li>
        <li>[1.7.10 Libvulpes] Creative battery backported</li>
        <li>[Libvulpes] added UI bounds getter</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update21">1.2.1</a>
    <ul id="update21" class="collapse">
        <li>Satellites chassis must be crafted before building in a satellite builder</li>
        <li>Satellites can be retrieved from orbit by placing a satellite chip into a guidance computer on a rocket
        with an empty satellite bay</li>
        <li>Possible crash with Terraformer fixed</li>
        <li>cleaned up space elevator behavior a bit</li>
        <li>added time multipler option for asteroids</li>
        <li>added config option for extinguished torches to drop extinguished torches rather than vanilla torches</li>
        <li>Gas mining ships will now function even with low view distance</li>
        <li>[1.11.2/1.10.2]Fix impossible amount of energy required for space elevators</li>
        <li>[1.11.2] Pipes visually connect</li>
        <li>[1.11.2] Fix Observatory not being able to program chips</li>
        <li>[1.11.2] Fix Beds not being usable on planets</li>
        <li>[1.11.2] Fix Orbital laser causing crash on rightclick</li>
        <li>[1.11.2] Fix clientside only calls upon orbit being reached causing crashes in some instances</li>
        <li>[1.7.10] Fix missing motor names in en_US</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update20">1.2.0</a>
    <ul id="update20" class="collapse">
        <li>Advanced Rocketry now looks for the planet config as "<world dir>/advRocketry/planetDefs.xml" before
            checking the config folder. This allows for each save to have its own config</li>
        <li>Revamed O2 handling in spacesuits. Spacesuit chestplates now have dedicated O2 slots for tanks and
        internal "invisible storage was removed"</li>
        <li>Add ability to rotate station around Y axis (note: some stuttering still occurs when changing rotation
        speed</li>
        <li>Add configurable <a href="config/AdvancedPlanetConfiguration.php#artifact">artifacts</a> required for
        planet travel</li>
        <li>When a station id chip is in a rocket\'s guidance computer, the "select dst" will now bring a screen up
        to allow players to select the landing pad on a station they wish to go to</li>
        <li>landing pads can now be named</li>
        <li>Fix text being over top of planets with rings</li>
        <li>Added <a href="blocks/SpaceElevator.php">space elevator</a></li>
        <li>Fix observetory trying to extract x data for every bus rather than just x over all busses</li>
        <li>Gas can be specified on gas giants by the <a href="config/AdvancedPlanetConfiguration.php#gas">XML config</a></li>
        <li>added <a href="items/modularSpaceSuit.php">beacon finding goggles</a></li>
        <li>adding a warp core to a rocket allows interplanetary travel within same system</li>
        <li>added config for station size</li>
        <li>Added list to choose from in the planet selector UI</li>
        <li>[1.7.10] fix space suits being dyed when they shouldn\'t have been</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update17">1.1.7</a>
    <ul id="update17" class="collapse">
        <li>fix moon being missing with default setup</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update16">1.1.6</a>
    <ul id="update16" class="collapse">
        <li>fixes from 1.0.17</li>
        <li>Fix some of the coils not speeding up of the arc furnace properly</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update14">1.1.4</a>
    <ul id="update14" class="collapse">
        <li>Fix crash when starting world with gravity generator disabled</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update13">1.1.3</a>
    <ul id="update13" class="collapse">
        <li>Stable build features from 1.0.14</li>
        <li>If using the custom planet XML earth must now be <a href="config/AdvancedPlanetConfiguration.php#dimMapping">dimmapped</a>
        to planet ID 0</li>
        <li>Fixed not being able to put data into the Observatory</li>
        <li>/advRocketry reloadRecipes command added to reload recipes from XML ingame</li>
        <li>[ Libvulpes ]All machine recipes are now written to XML if the XML does not yet exist</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update12">1.1.2</a>
    <ul id="update12" class="collapse">
        <li>New asteroid selection mechanic, asteroid chips now programming in observetory</li>
        <li>More <a href="blocks/Motors.php">motors</a> have been added</li>
        <li>More advanced motors increase multiblock machine speed</li>
        <li>Observatory now requires a motor</li>
        <li>Observatory can have glass exchanged for lens which increase view distance</li>
        <li>Space suits can now be dyed</li>
        <li>Blast furnace/crystallizer/electrolyser/rolling machine speed can be increased with higher teir coils</li>
        <li>rocket input and output hatches now have states for redstone IO and can now have operation suspended with
        redstone signals</li>
        <li>Fix rocket loaders and unloader having swapped textures</li>
        <li>Added forcefields</li>
        <li>Added a gravity generator</li>
        <li>[ libvulpes ] Motors moved to libvulpes</li>
        <li>[ libvulpes ] More coils</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update020">1.0.20</a>
    <ul id="update020" class="collapse">
        <li>Update Terraformer UI</li>
        <li>Rocket assembling machine now displays build complete on a successful build</li>
        <li>Station assembling machines no longer consumes items when structure is invalid and build is pressed</li>
        <li>[1.10.2/1.11.2]FluidStacks display in JEI</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update019">1.0.19</a>
    <ul id="update019" class="collapse">
        <li>Fix jetpack overriding flight from items from other mods if both are worn at the same time</li>
        <li>Fix handling for GC gravity if GC moon is not registered to AR</li>
        <li>Add seperate sound for lathe</li>
        <li>Jackhammer can now break blocks properly</li>
        <li><a href="items/pressureTank.php">pressure tanks</a> can no longer stack</li>
        <li>Yet another attempt to prevent machines from stopping when placed across chunk boundries</li>
        <li>Fix error with breaking a single pipe breaking the entire network</li>
        <li>modified hatch recipes</li>
        <li>[1.10.2] [Libvulpes] fix machines unloading if straddling chunks</li>
        <li>[1.7.10] Fix NEI handling for fluids</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update018">1.0.18</a>
    <ul id="update018" class="collapse">
        <li>[1.7.10] fix stations not being able to be built</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update017">1.0.17</a>
    <ul id="update017" class="collapse">
        <li>fix rocket engines in the automated vehicle assembler facing the wrong way when built along N/S</li>
        <li>Add config for terraformer fluid consumption rate</li>
        <li>Fix planets becoming gas giants if they have a planet ID higher than 255</li>
        <li>Force stations orbit nonexistant planets to move to overworld upon startup</li>
        <li>Fix rocket thrust configuration not affecting rocket acceleration</li>
        <li>Fix CME with pressurized tanks</li>
        <li>[1.7.10] pressurized tanks actually can recieve fluid from AR pipes apparently BC and several other
        mods do not actually run canFill checks</li>
        <li>Fix issue with O2 system where metachanges outside the sealed area can cause nearby areas to unseal</li>
        <li>[libvulpes] Massive speed increases for the atmosphere calculation algorithm
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update016">1.0.16</a>
    <ul id="update016" class="collapse">
        <li>Fix rocket duplication... again</li>
        <li>Added config options for geode generation</li>
        <li>Fix planets with moons always using the first star as its host</li>
        <li>Fix temperature not being set right on planets loaded from XML</li>
        <li>Add XML for small plate presser</li>
        <li>Fix ore scanner not being able to scan for diamonds or emeralds</li>
        <li>Ore scanner displays player location</li>
        <li>Planet icons can now be set via the <a href="config/AdvancedPlanetConfiguration.php#customIcon">customIcon</a>
        tag</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update015">1.0.15</a>
    <ul id="update015" class="collapse">
        <li>Fix dupe bug with missions</li>
        <li>Fix crash with gas mining missions</li>
        <li>[1.10.2][ Libvulpes ] Fix Creative battery not outputting to neighboring tiles</li>
        <li>[1.7.10] Fix crash when trying to assemble on a pad with nothing there</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update014">1.0.14</a>
    <ul id="update014" class="collapse">
        <li>I\'ve actually now forgotten what else has been fixed.. sorry</li>
        <li>Added the <a href="Commands.php">givestation</a> command</li>
        <li>Add missing recipe for the railgun</li>
        <li>Fix crash if a chip programmed with the id of an oremapping satellite is placed in the satellite
        monitoring station</li>
        <li>Fix Class not found exception on server when using the orbital laser drill</li>
        <li>Fix CME with rocket/mining drill return</li>
        <li>[MC 1.10.2] Fix researching distance consuming mass data in the ABDP</li>
        <li>[MC 1.10.2] Fix lightwood leaves dropping oak saplings instead of lightwood saplings</li>
        <li>[MC 1.10.2] Fix quartz cruicible not showing up in creative menu</li>
        <li>[MC 1.10.2] Fix render offset for the prescision assembler</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update013">1.0.13</a>
    <ul id="update013" class="collapse">
        <li>Update Ff_FR (Thanks Thysium!)</li>
        <li>Rather than crashing, air blocks that are rejected now just print warnings and are "rescheduled" with
        threaded atmosphere calculation</li>
        <li>Fix jetpack being broken in the 1.0.12 build</li>
        <li>Fix client crash with lathe and rolling machine when used with AE</li>
        <li>Fix incorrect O2 readout on spacestations</li>
        <li>Fixed holo-projector menu overshooting its render</li>
        <li>Fix changing of distance block not updating the O2 system in certain conditions</li>
        <li>Fix render corruption when the Atmosphere analyser is not the first upgrade in the helmet</li>
        <li>Gas giants can now be deleted</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update012">1.0.12</a>
    <ul id="update012" class="collapse">
        <li>Fix compat recipes where the lathe would only output 1 rod instead of 2</li>
        <li>Fix iron ingots -> iron rod recipe in the crafting table yeilding only 1 rod instead of 4</li>
        <li>Hostile mobs now spawn on planets</li>
        <li>Fix XML config not working due to a bug introduced in 1.0.11</li>
        <li>Added config to change the force of thrust of the jetpack</li>
        <li>Added config to disable the landing boots upgrade on normal and higher gravity planets</li>
        <li>Logs actually print</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update011">1.0.11</a>
    <ul id="update011" class="collapse">
        <li>Fix Ore properties specified in the planet XML not working in singleplayer</li>
        <li>Fix Rocket load dupe bug</li>
        <li>Fix NPE in the orbital laser when trying to save NBT state when set to spiral mode</li>
        <li>XML recipes can now properly load oredict entries in the output tag</li>
        <li>XML recipes will now override the default recipes if the input and outputs match</li>
        <li>[1.10.2] Fix crash with underwater utilities</li>
        <li>[1.10.2] fix possible render crash with leaves and grass on rockets</li>
        <li>[LibVulpes] Fix free item bug with machine deconstruction and holograms</li>
        <li>[LibVulpes] Fix crash when using multiple small plate pressers next to each other in the same tick</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update010">1.0.10</a>
    <ul id="update010" class="collapse">
        <li>Fix ABDP not actually using data</li>
        <li>Add config for solar generator power output</li>
        <li>Fix crash with orbital laser where the config to allow it to mine the planet is set to false</li>
        <li>Possible fix for crash causing a CME to occur if using experimental atmosphere settings</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update09">1.0.9</a>
    <ul id="update09" class="collapse">
        <li>Fixed iron ingot -> rod recipe in the lathe returning only 1 rod</li>
        <li>Fix missing isRemote check in the loader, causing client/server desync with the number of items in the
        loader</li>
        <li>fixed skycolor and fog color not properly taking hex</li>
        <li>O2 bar and suit HUD can now be dragged with middle click if lockUI=false in config</li>
        <li>Spacesuits can now let you breathe underwater</li>
        <li>Fix CME with cables</li>
        <li>Added config for O2 vent radius</li>
        <li>[1.10.2] Fixed stack overflow exception with pressurized tanks</li>
        <li>[1.10.2] Fix GUI for ore scanner</li>
        <li>[1.10.2] Fixed bad logic making it impossible to respawn on planets</li>
        <li>[1.10.2] Fixed active texture on block not showing sometimes</li>
        <li>[1.10.2] [LibVulpes] Fix solar panels shoving energy into adjacent solar panels</li>
        <li>[1.10.2] Fix crash when installed with <a href="https://minecraft.curseforge.com/projects/perfect-spawn">perfect
            spawn</a></li>
        <li>[LibVulpes/Advanced rocketry] Fixed solar panels working if placed under solar panels</li>
        <li>[LibVulpes] Fix fluid hatches and pressurized fluid tanks from eating buckets if you try to fill it
        with a different fluid than the one it contains</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update08">1.0.8</a>
    <ul id="update08" class="collapse">
        <li>Add time multiplier config for asteriod mining missions</li>
        <li>Fix possible threading issue causing <a href="https://github.com/zmaster587/AdvancedRocketry/issues/346">a
            CME on connecting</a></li>
        <li>Seperated configs for ore spawn for geodes and asteroids</li>
        <li>Fix possible crash when generating geode if an item without a block is specified in the config</li>
        <li>Fix issue with atmosphere system where non-full blocks become deoxygenated when placed</li>
        <li>Possible fix for crashes with experimental atmosphere options</li>
        <li>Changed Unmanned Vehicle Assembler bounds to 16</li>
        <li>Fix armor stands consuming Oxygen (Avoid bothering the Doctor)</li>
        <li>Fix Observetory recipe not using oredict</li>
        <li>Fix issue where station components that face opposite directions on the ground get turned 90 degrees</li>
        <li>Fix possible render crash with orbital laser as seen from planet surface</li>
        <li>Fix issue when mapping planets via the config AR would try to register a dimension belonging to another
        mod depending on load order</li>
        <li>Added the <a href="config/AdvancedPlanetConfiguration.php#gasGiant">Gas Giant tag</a> to the planet
        config</li>
        <li>[1.7.10] Fix possible crash when generating a planet with only one biome</li>
        <li>[ Libvulpes ] Fix double ticking of multiblock machines</li>
        <li>[ LibVulpes ] Remove attempted energy transfers on client</li>
        <li>[ LibVulpes ] Fix machines pulling from the top slot in the fluid hatches</li>
        <li>[ LibVulpes/Advanced Rocketry ] Fix possible load issues involving locale
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update07">1.0.7</a>
    <ul id="update07" class="collapse">
        <li>Increased output of concrete recipe</li>
        <li>Fix landing pads not working properly if not placed by player or sent up in a station package thing</li>
        <li>Added redstone state to oxygen vent</li>
        <li>Fix steel recipe. Should use charcoal, not coal</li>
        <li>Fix sawmill damage being linked to time of day</li>
        <li>[1.10.2] Fix rocket monitoring station not obeying redstone signals</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update06">1.0.6</a>
    <ul id="update06" class="collapse">
        <li>Fix Data not being pulled from satellite monitoring station under certain conditions</li>
        <li>Fixed missing color cleanup in lathe renderer</li>
        <li>Fixed rocket behavior when falling back to a planet upon not landing on a space station</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update05">1.0.5</a>
    <ul id="update05" class="collapse">
        <li>Fixes Stack Overflow error caused by placing two airlock doors next to each other and attempting to
        seal a room</li>
        <li>Fix Astrobody data processor requiring the switch flipped if it runs out of data.</li>
        <li>Fix duplication of lightwood saplings with bonemeal</li>
        <li>Added missing recipes for rods</li>
        <li>Space Station chips now store location on a per planet basis now. <b>This may break return coordinates
            for existing rockets</b></li>
        <li>Fixed solar generators not pushing RF like they should</li>
        <li>Planet ID chips no longer store data</li>
        <li>Rocket now shows destination planet/station ID onscreen before takeoff</li>
        <li>Fixed lack of destination dimension syncing, fixes seeminly random "Cannot Reach destination" errors</li>
        <li>Riding a rocket with a new space station to the same new station no longer acts funny</li>
        <li>Recipes made cheaper</li>
        <ul>
        <li>3 ingots -> 4 rods in crafting table</li>
        <li>1 block -> 4 plates in small plate presser</li>
        <li>recipe for batteries now makes 4</li>
        <li>recipe for machine structure now takes 4 plate and 4 rods</li>
        <li>recipe for machine structure now makes 4</li>
        </ul>
        <li>[ LibVulpes ] Fixed coal generators not pushing RF like it should</li>
        <li>[1.7.10] Fix no rotation occuring with orientation controller if no warp controller placed.</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update04">1.0.4</a>
    <ul id="update04" class="collapse">
        <li>Fix Aluminum ore not generating</li>
        <li>Allow the entity bypass to use entity class names</li>
        <li>Update Russian translation ( Thank you m3gagluk)</li>
        <li>Add Ukrainian translation (Thank you wlich!)</li>
        <li>Fix issue where the plate presser will not properly reconise the block if it\'s not the first register
        for that oreDict entry</li>
        <li>Fix rare NPEs with multiblock machine where sometimes it tries to render a null item</li>
        <li>Fix fuelling stations eating all the buckets</li>
        <li>Fix possible crash with Dynamic Surround</li>
        <li>Potential fix for rare crash from pipes</li>
        <li>Rename "Laser Drill" to "Orbital Laser Drill" and fix name inconsistancies</li>
        <li>Fix exploit where sitting in a seat not mounted on a rocket allows players to pick up distant items</li>
        <li>[ LibVulpes ] Fixed crash caused by putting an AR tank into an empty fluid hatch</li>
        <li>[ LibVulpes ] Fix error in recipe XML template</li>
        <li>[ LibVulpes ] RF can now be extracted from the IC2 plug</li>
        <li>[1.10.2][ LibVulpes ] Fix Compatibility with energy from other ForgeEnergy supporting mods</li>
        <li>[1.10.2][ LibVulpes ]Fix IC2 Energy handler attempting to register on client</li>
        <li>[1.10.2][ LibVulpes ]Fix crash trying to get rotation</li>
        <li>[1.10.2][ LibVulpes ]Fix bug where IC2 plug does not actually drain power from IC2 sources</li>
        <li>[1.10.2] Fix death when dismounting from seat in very specific configurations</li>
        <li>[1.7.10] Fix missing recipe for carbon scrubber</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update03">1.0.3</a>
    <ul id="update03" class="collapse">
        <li>Fix off by one with rocket assembler</li>
        <li>[1.10.2] [Libvulpes] Fix recipe loading</li>
        <li>[1.7.10] [Libvulpes] Fix imcompatibility with ICBM</li>
        <li>[1.7.10] Fix rocket not being able to launch</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update02">1.0.2</a>
    <ul id="update02" class="collapse">
        <li>Requires Libvulpes 1.10</li>
        <li>Added Basic Laser gun (beta item, uncraftable)</li>
        <li>[libvulpes] Fix XML recipe registration allowing recipes with no outputs</li>
        <li>Fixed not being able to travel to planets with ids higher than 256 due to forgetting to remove legacy
        code</li>
        <li>Fixed some Achievments not working</li>
        <li>[1.7.10] Fixed XML recipe handler not being able to read unlocalized item names</li>
        <li>[1.10.2] [libvulpes] Re-added IC2 plugs</li>
        <li>[1.10.2] [libvulpes] Fixed linker not working with spongeForge</li>
        <li>[1.10.2] Fixed Crash when right clicking extinguished torch</li>
        <li>[1.10.2] [libvulpes] Implemented Tesla API support for energy</li>
        <li>[1.10.2] [libvulpes] Fixed bug causing metal blocks and coils built into machines to throw an exception
        upon harvesting</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update01">1.0.1</a>
    <ul id="update01" class="collapse">
        <li>Added list of entities that ignore atmosphere effects</li>
        <li>Fixed crash caused by trying to fly a rocket with an unprogrammed chip</li>
        <li>[1.10.2] Fixed rockets being offset by one</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#updateRC3">1.0.0RC3</a>
    <ul id="updateRC3" class="collapse">
        <li>Added <a href="Commands.php">command</a> to generate moons</li>
        <li>Added comments to default XML recipe file</li>
        <li>Added config to reset planet config in the AR config</li>
        <li>Fix crash on startup caused by oredict items without blocks attempting to be used by the holo projector
        as blocks</li>
        <li>Make ores generate again</li>
        <li>Fix bug causing planet IDs higher than 256 overwriting the overworld\'s properties</li>
        <li>[1.10.2] Fixes unmanned vehicle assembler off by 1 error</li>
        <li>[1.7.10] Fix Data cable being overridden by energy cable</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#updateRC2">1.0.0RC2</a>
    <ul id="updateRC2" class="collapse">
        <li>Requires LibVulpes 0.1.7</li>
        <li>Fixed O2 sealing crash with blocks with null BBs</li>
        <li>Added missing dust -> ingot recipes</li>
        <li>small plate presser ore -> dust recipe doubled</li>
        <li>other small fixes</li>
        <li>[1.7.10] Fix crash with orbital laser</li>
        <li>[1.7.10] Fixed crash with holo-projector</li>
        <li>[1.7.10] Fixed crash on join on multiplayer</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#updateRC1">1.0.0RC1</a>
    <ul id="updateRC1" class="collapse">
        <li>Added <a href="concepts/OreConfiguration.php">XML config</a> for ore generation on different planet
        types</li>
        <li>Added config to add more harvestable fluids in gas giants</li>
        <li>Added tags to the <a href="concepts/AdvancedPlanetConfiguration.php">Advanced Planet generation XML</a>
        to allow manually specifying <a href="concepts/AdvancedPlanetConfiguration.php#dimId">DIMID</a> and <a href="concepts/AdvancedPlanetConfiguration.php#dimMapping">
            mapping dims</a> from other mods as planets
        (including GC planets)</li>
        <li>Satellites can now be accessed from space stations orbiting the same planet as the satellite</li>
        <li>Sky colors now differ on newly generated planets</li>
        <li>Planets may now rotate along their own axis</li>
        <li>Added four stars to generate by default</li>
        <li>Sealing and oxygenating a room on planets with heavy atmospheres now removes the fog indoors</li>
        <li>Artifical atmospheres now show up as "pressurizedAir"</li>
        <li>Fixed a few small desyncs with the warp controller</li>
        <li>Beds no longer explode on other planets</li>
        <li>Added <a href="blocks/Railgun.php">Railgun</a></li>
        <li>Added <a href="concepts/RecipeConfiguration.php">XML Recipe modification</a> support</li>
        <li>Fixed memory leak that can occur while logging in a out frequently</li>
        <li>Added planet orbital mechanics</li>
        <li>Added solar eclipses</li>
        <li>Nerfed Max returns of an asteriod mining <a href="concepts/Missions.php">mission</a> from 20k+ stacks
        to 100 stacks of ore</li>
        <li>Added the /advRocketry filldata command</li>
        <li>Added capability for multiple star systems and commands for manipulating stars</li>
        <li>Putting a station id chip in a guidance computer while launching a station no longer sticks the rocket
        inside the station</li>
        <li>Requires LibVulpes 0.1.6</li>
        <li><a href="items/holoProjector.php">Holo Projector</a> now displays amounts and types of blocks needed to
        build a structure</li>
        <li>Rockets now display errors when ridden and unable to launch</li>
        <li>Rockets can only travel within planet moon systems now, use warp to go to other planets</li>
        <li>Added config to make orbital laser not destroy the world, laser no longer mines world by default</li>
        <li>Added config to set valid oredict entries for ores when laser is in non-destructive mode</li>
        <li><a href="blocks/LaserDrill.php">Orbital laser</a> is now a multiblock structure</li>
        <li>Fixed off-by-one error causing suffocation near walls in sealed rooms</li>
        <li>Fixed suffocation while standing near IC2 or enderIO pipes in a sealed room</li>
        <li>Fixed Space Station Modules being placed facing backward</li>
        <li>[MC 1.10.2] Fix inventory checks being ignored globally</li>
        <li>[MC 1.10.2] Fix packet leak when in single player</li>
        <li>[MC 1.10.2] Fixed issue where the holo projector would sometimes not show the structure due to Player
        entity not being in the entity list</li>
        <li>[MC 1.10.2] Orbital laser no longer crashed the game when breaking the block</li>
        <li>[MC 1.10.2] Orbital laser actually functions now</li>
        <li>[MC 1.10.2] Fixes certain configurations with the seat causing player to spawn under bedrock on
        dismount</li>
        <li>[MC 1.10.2] Fixed duplicate packet execution.
        <li>[MC 1.7.10] Fix incorrect Geode generation</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update091">0.9.1</a>
    <ul id="update091" class="collapse">
        <li>Requires LibVulpes 0.1.5</li>
        <li>Added Altitude Controller (allows modification of Altitude of space stations, simply by placing in a
        station and opening the interface)</li>
        <li>Fix bug with Blast Furnace where in rare circumtances can have the machine form on the server but not
        the client</li>
        <li>Hopefully fix a bug where the holo projector causes a crash</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update090">0.9.0</a>
    <ul id="update090" class="collapse">
        <li>Requires LibVulpes 0.1.4</li>
        <li>[Mc 1.10.2] AR blocks will now properly take power from other mod\'s blocks</li>
        <li>Redstone states for rocket infrastructure</li>
        <li>Geodes now spawn the same ore as can be collected by asteriod missions (which in turn is configurble)</li>
        <li>Added Achievments</li>
        <li>Added <a href="blocks/Cables.php">Fluid Pipes</a></li>
        <li>[MC 1.7.10] Added <a href="blocks/Cables.php">energy pipes</a> and generators</li>
        <li>[MC 1.7.10] Game will no longer crash without an RF mod</li>
        <li>Generators now display amount of power being produced</li>
        <li><a href="blocks/StationBuilder.php">Station Builder</a> can now assemble station modules, which can be
        sent up to attach to existing stations</li>
        <li>Fixed issue where invalid blocks for titanium aluminide show up in NEI (and possibly JEI)</li>
        <li>Hopefully fix bug where rocket vanishes on client when going to space stations</li>
        <li>Fix NPE with <a href="items/holoProjector.php">holo projector</a></li>
        <li>[Mc 1.10.2] Fix crash when placing data cables next to energy cables</li>
        <li>Fixed nasty bug where some space stations over ID 3 return the wrong id from block coords</li>
        <li>Fixed <a href="items/oreScanner.php">Ore Scanner</a> Being uncraftable</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update085">0.8.5</a>
    <ul id="update085" class="collapse">
        <li>Fixed not being able to warp to moons from same planet</li>
        <li>Fixed incorrect usage of fuel when clicking warp while already in warp</li>
        <li>Fixed generating a world with a bonus chest causing a crash</li>
        <li>Added BlackList for SpaceLaser</li>
        <li>Fixed untextured blocks for space laser</li>
        <li>Increased the default amount of power generated by the microwave reciever by x10</li>
        <li>[MC 1.7.10] Thermos support courtesy of RecursiveG</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update084">0.8.4</a>
    <ul id="update084" class="collapse">
        <li>Config for laser drill power multiplier</li>
        <li>Small bugfixes</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update083">0.8.3</a>
    <ul id="update083" class="collapse">
        <li>Added config option for blacklisting biomes to prevent them from spawning on planets</li>
        <li>Added config option to prevent any vanilla biomes from spawning on planets</li>
        <li>Added config option to register high pressure biomes</li>
        <li>Added config option to register biomes that span entire worlds</li>
        <li>[MC 1.7.10] Powersuits now also protect from the vacuum of space</li>
        <li>Upon Death player should spawn in overworld, preventing infinite death loops</li>
        <li>[MC 1.7.10] Fixed bug causing the first space station to be built being assigned an invalid number</li>
        <li>Fix warp controller causing crash if placed in world</li>
        <li>[MC 1.10.2] Fixed glow affect for space suit HUD not working</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update082">0.8.2</a>
    <ul id="update082" class="collapse">
        <li>Added Decorative light</li>
        <li>Fixed rare bug where client would crash when going between worlds</li>
        <li>Optimized Rocket renders with GLLists</li>
        <li>Data pipes can now pull data from Satellite Terminal with requiring the connect button to be pressed,
        now allows fully automated Data harvesting</li>
        <li>Added more stars</li>
        <li>Fixed Sun being out in the rain</li>
        <li>[MC 1.10.2] Added <a href="blocks/SolarGenerator.php">Solar Generators</a></li>
        <li>[MC 1.10.2] Added <a href="blocks/Cables.php">Energy cables</a> and implementing Forges Energy system
        to replace the... lack of energy systems in 1.10</li>
        <li>[MC 1.10.2] Added Coal generators (takes anything that\'ll burn in a furnace</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update081">0.8.1</a>
    <ul id="update081" class="collapse">
        <li>Backward Compatibility: Create Gas Giants in worlds made in previous versions of AR</li>
        <li>Fix Dilithium not generating on galacticraft\'s moon</li>
        <li>Fix crash caused by unregistering gas giant dimensions</li>
        <li>Reduced the amount of smoke in large rockets</li>
        <li>Added config to increase output of MicrowaveRecievers</li>
        <li>Fixed crash involving blocks that do not properly return an itemstack in the rocket GUI</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update080">0.8.0</a>
    <ul id="update080" class="collapse">
        <li>Added Gas Giants and Gas Giant Mining</li>
        <li>Added <a href="blocks/UnmannedVehicleAssembler.php">Unmanned Vehicle Assembler</a></li>
        <li>Added <a href="blocks/Terraformer.php">Terraformer</a></li>
        <li>Added <a href="items/modularSpaceSuit.php#foggles">Anti-Fog visor</a></li>
        <li>Added Titanium Aluminide</li>
        <li>Added recipe for bonemeal in the chemical reactor</li>
        <li>Added Nitrogen</li>
        <li>Added Buckets for Oxygen, Nitrogen, and Hydrogen</li>
        <li>Added <a href="items/modularSpaceSuit.php#atmAnalyser">Atmosphere Analyser</a></li>
        <li>Added sounds</li>
        <li>Mobs now take damage from the vacuum</li>
        <li>Added Biome Changer Satellite and <a href="items/biomeChanger.php">Biome Changer Satellite Remote</a></li>
        <li>Increased planet variety</li>
        <li>Infrastructure can now be linked to Docking Pads which will in turn link to any rocket that lands on
        the Docking Pad</li>
        <li>New algorithm for warp fuel calculations</li>
        <li>Redid Fog effect for planets (again)</li>
        <li><a href="blocks/Hatches.php">Rocket fluid loader and fluid unloader</a></li>
        <li>Rockets can now be automated to fly between destinations using <a href="blocks/DockingPad.php">Docking
            Pads</a></li>
        <li><a href="blocks/DockingPad.php">Docking Pads</a> now accept <a href="items/linker.php">linkers</a> as
        an item</li>
        <li><a href="items/holoProjector.php">Holo-Projector</a> now will align the hologram to a machine when used
        to rightclick a machine control block
        <li>Fixed warp effect not working in multiplayer sometimes</li>
        <li>Fixed solar satellites not being created properly</li>
        <li>Fixed graphics on pipes/Microwave Reciever not being shaded</li>
        <li>Fixed the delete satellite button not updating the itemstack on the server</li>
        <li>Fixed laser drill missing texture</li>
        <li>Now Requires LibVulpes 0.1.2</li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update070">0.7.0</a>
    <ul id="update070" class="collapse">
        <li>Implemented <a href="items/modularSpaceSuit.php">Modular space suits</a></li>
        <li>Added Jetpack</li>
        <li>Added Bionic Legs</li>
        <li>Moved multiblock blocks/items to a new item group in creative</li>
        <li>Added Aluminum</li>
        <li>Added <a href="items/pressureTank.php">pressure tanks</a></li>
        <li>Oxygen Charger renamed to <a href="blocks/gasCharger.php">Gas Charger</a></li>
        <li>Gas Charger now can fill hydrogen tanks in spacesuits</li>
        <li>
        <span style = "color:#990000;">Massive Refactor of code! May require liquid/data/satellites hatches to be
            replaced!</span>
        </li>
    </ul>
    <a id="update-title" data-toggle="collapse" href="#update068">0.6.8</a>
    <ul id="update068" class="collapse">
        <li>Fixed Rockets being stuck in the air on space stations</li>
        <li>Fixed O2 detectors having the wrong name</li>
        <li>Fixed low gravity being missing in space</li>
        <li>Added <a href="./blocks/LaserDrill.php">Laser Drill</a></li>
        <li>Added <a href="./blocks/MicrowaveReciever.php">Microwave Reciever</a></li>
        <li>Overhauled textures for planets as viewed from space stations</li>
        <li>Fixed warp not working half the time in single player</li>
        <li>Fixed planet information not being displayed in the planet selector interface</li>
        <li>Actual documentation for some of the mod on this site</li>
    </ul>';
    
    $infoBarContent = '';
    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/templateIndex.php');
?>
