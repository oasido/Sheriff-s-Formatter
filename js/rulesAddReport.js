// made by aiden marshall / bluehammer
let finalRulesSelection;
function rulesAdd(){
let rulesSelection;
let selectionArray = "";
  $('.ruleSelection').each(function() {
  rulesSelection = $(this).val();

    if (rulesSelection.includes("1. Common Courtesy")) {
      selectionArray += "   [size=150][b]1. Common Courtesy[/b][/size]  "  +
      "   [list=none][divbox=#DDEBDF]Be kind to others and think before you type. There is no need to be hurtful or abusive, especially towards staff members who are here to help you. This rule can be explained with the following quote: [b]You shall never bother others, you shall be both fair and kind, and whatever else you do, I shall not mind''[/b]  "  +
      "     "  +
      "   Roleplay at all times. You are not allowed to break the server rules because you think someone else did. In regards to that, you should not disrupt, stall or void roleplay unless an admin tells you to. Examples:  "  +
      "     "  +
      "   [list=none]  "  +
      "   [*]Quitting the game to avoid an arrest because you were (in your opinion) being arrested for no reason.  "  +
      "   [*]Repeatedly refusing to roleplay until an admin comes to your aid after you made a report.  "  +
      "   [*]Filing heat-of-the-moment reports when the players are not deserving of admin punishment.[/list]  "  +
      "   If you are in the middle of an IC situation and another player is speaking to you OOCly in an attempt to disrupt your roleplay or simply contact you, you may ignore them. However, if an admin is trying to contact you, it is your obligation to respond. Refusing to reply to an admin's messages may get you punished.  "  +
      "     "  +
      "   In Los Santos Roleplay (in-game, forums, IRC, Teamspeak or any other of our services), admin instructions are final, whether they are stated in the rules or not — they should be accepted and followed at all times.  "  +
      "     "  +
      "   If you come across a bug on any of our services, you are required to [url=http://forum.ls-rp.com/viewforum.php?f=509]report[/url] it. Exploiting bugs is prohibited and will get you permanently banned. It is your obligation to [url=http://forum.ls-rp.com/viewforum.php?f=2]report[/url] rule-breakers as well.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Anything from a verbal warning to a ban depending on severity.[/divbox][divbox=#E3DDEB]In IC chat, speak only ICly and in English. Do not use internet language ICly (lol, omg, etc). In public OOC chats like /b, use only English. If you want to speak in another language ICly, you have to write in English, but with a [Language] tag in front of your text, for example — John_Smith says: [Spanish] Hey, what's up?  "  +
      "     "  +
      "   If you've got a question related to the server, use the in-game command [b]/helpme[/b]. If you've got a problem with someone then feel free to request help with  [b]/re[/b]. Do not message our testers and admins directly.  "  +
      "     "  +
      "   You are allowed to be AFK (Away From Keyboard) for up to 10 minutes,  provided you are not in a highly populated area or an area where people are likely to attempt to roleplay with you. AFK in public at own risk.  "  +
      "     "  +
      "   Intentionally baiting police for the sole intent of creating a chase / active situation with PD/SD is forbidden.  "  +
      "     "  +
      "   If you believe a staff member is abusing their power then you can read through [url=http://forum.ls-rp.com/viewtopic.php?f=2&t=356746]this topic[/url] and file a report.  "  +
      "     "  +
      "  If you quit or time out during an arrest and don't come back in an attempt to avoid being arrested IC, the charges will be applied to your character with an addition of the ''Escape From Custody'' charge. When you are punished for quitting or timing out to avoid an arrest, an administrator automatically grants permission to the law enforcer to press charges, even if your name is not ICly known to them.[/divbox][/list]  " ;
    }

    if (rulesSelection.includes("2. Metagaming")) {
      selectionArray += "   [size=150][b]2. Metagaming[/b][/size]  "  +
      "   [list=none][divbox=#DDEBDF]Using Out Of Character information In Character (metagaming) is not allowed. Inciting someone to metagame is also against the rules. This includes emoting information that other people have no reason to currently know — your /me's and /do's should not state what others cannot see, hear, touch, smell or taste. Examples:  "  +
      "     "  +
      "   [list=none][*]John_Smith reads Sam_Johnson's OOC nametag and roleplays that he now knows him.  "  +
      "       [*]Adam_West messages John_Smith OOCly and tells him that he is being robbed at his house. John_Smith then decides to change his IC plans in such a way so that he can help Adam_West.  "  +
      "   [*][emote]Adam_West begins to think about killing the men who attacked him.[/emote][/list]  "  +
      "     "  +
      "   Using VoIP programs such as Teamspeak, Skype and Ventrilo to communicate IC whilst in-game is strictly forbidden.  "  +
      "     "  +
      "  It is also against the rules to use alternative characters to interact with your main accounts, gain knowledge from your main, pass on info and so on. Alternate characters must interact IG with others to gain knowledge or carry out related tasks.[/divbox] [divbox=#EBDDDD][b]Punishments:[/b] Anything from an admin-jail to a ban depending on the severity and outcome of your actions.[/divbox][/list][list][divbox=#E3DDEB]VoIP programs such as Teamspeak can be used In Character only by official law enforcement factions like PD and SD. No other players are allowed to communicate IC using real life voice chat programs.[/divbox][/list]  " ;
    }

    if (rulesSelection.includes("3. Powergaming")) {
      selectionArray += "   [size=150][b]3. Powergaming[/b][/size]  "  +
      "   [list=none][divbox=#DDEBDF]Powergaming can be defined as performing acts that are not humanlike; forcing roleplay on others without giving them a fair chance; making up things which did not happen so that you can benefit; roleplaying things which are not possible script-wise so that you can gain an unfair advantage. Examples:  "  +
      "     "  +
      "   [list=none]  "  +
      "       [*][emote]John_Smith picks up a bus and throws it at SAN tower.[/emote]  "  +
      "   [*]Getting off the ground and running away after you have been tazed by a police officer.  "  +
      "   [*][emote]John_Smith kicks Adam_West in the head, immediately causing him to die.[/emote]  "  +
      "   [*]Roleplaying that an item is not on you ICly when it is already on you script-wise. (e.g. during frisks)  "  +
      "   [*]Roleplaying that your strip club is guarded by non-player characters (NPCs).  "  +
      "   [*]Entering a car and doing /taw and /tad to steal items with zero role-play involved.[/list][/divbox] [divbox=#EBDDDD][b]Punishments:[/b] Anything from a verbal warning to an admin-jail or ban depending on severity.[/divbox][divbox=#E3DDEB]Do not heal during or right after confrontations such as fights and shootouts.  "  +
      "     "  +
      "   No advertising of illegal items/services using /ad and /cad. Any advertisement for escort services and personal advertisement (looking for female/male companion, etc) are prohibited in-game but allowed to be done in this [url=http://forum.ls-rp.com/viewforum.php?f=1440]forum[/url].  "  +
      "     "  +
      "   When brandishing large weapons (golf club, bat, shovel, pool cue, katana, shotgun, combat shotgun, MP5, AK-47, M4, county rifle and sniper rifle), roleplay taking them out with /me's instead of just scrolling them.  "  +
      "     "  +
      "   You will need the Out Of Character consent of all players on scene if you wish to roleplay with things that do not exist script-wise. The only exceptions to this are registered business cameras and the equipment available to on-duty PD, SD, FD, DOC, GOV & DOJ members. Police dogs are not considered to be equipment.[/divbox][/list][size=150][b]4. Abuse of SA-MP Physics[/b][/size]  "  +
      "  [list=none]  " ;
    }

    if (rulesSelection.includes("4. Abuse of SA-MP Physics")) {
      selectionArray += "   [divbox=#DDEBDF]SA-MP physics and movements in-game are hardcoded and cannot be changed via scripting so the following is forbidden to avoid non-roleplay situations:  "  +
      "     "  +
      "   [list=none][*]Bunnyhopping — jumping repeatedly to move around quicker.  "  +
      "   [*]Olympic swimming — continuously swimming without roleplaying that you are exhausted.  "  +
      "   [*]Hopping/Tapping on bikes/motorcycles — hopping about continuously or tapping W to go faster.  "  +
      "   [*]Chicken-running — running around in a zig-zag motion to avoid being hit by bullets.  "  +
      "   [*]Ninja-jacking — pulling players out of their vehicles with no roleplay.  "  +
      "   [*]Vehicle surfing — being on top of a vehicle to ride it, instead of being inside of it. This includes pretending someone is in the trunk of your car while they are actually on the roof. If you wish to kidnap someone and roleplay them as being in the trunk, they will have to occupy a script-wise seat.  "  +
      "   [*] Drive-bying as the driver with an SMG — shooting others from the driver seat of the vehicle.  "  +
      "   [*] Drive-bying without a driver — shooting others from a car with no driver in the car.  "  +
      "   [*] Tackle — abusing the /tackle command to force a player into an animation[/list][/divbox][divbox=#EBDDDD][b]Punishments:[/b] Anything from a warning to an admin-jail. BMX permissions can be revoked if abused.[/divbox][/list][list=none][divbox=#E3DDEB]You are allowed to ninja-jack others whilst being chased by the police. Police are allowed to ninja-jack players out of a vehicle they've ninjajacked themselves as an immediate response.  "  +
      "     "  +
      "  You are allowed to ride in and shoot from the back of trucks and boats. You are also allowed to have one person surfing on your bicycle as if they are standing on the pegs or sitting on the handlebars.[/divbox][/list]  " ;
    }

    if (rulesSelection.includes("5. Third Party Modifications")) {
      selectionArray += `[size=150][b]5. Third Party Modifications[/b][/size]
[list=none][divbox=#DDEBDF]Third party modifications that give you an unfair advantage over other players are not allowed. Think before you install programs or mods, because if we find out that you are using something you should not, you will be banned permanently. If you think or know someone is cheating, it is your obligation to report them.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Permanent ban. Cheating is that serious.[/divbox][/list][list=none][divbox=#E3DDEB]Keybinds that script influential role-play / responses, give you any sort of advantage over other players or act as macros to shorten server commands are forbidden. Frequently used [b]emotes[/b] (not server commands) that do not drastically impact a scene - e.g. describing your character's appearance, performing a repetitive action such as keying a radio or brandishing a small weapon (where no role-play is technically needed) and anything else along those lines may be bound to a key. In short, they may only be used to [b]enhance[/b] role-play. It is your responsibility to ensure that your binds are in line with this rule. Police megaphone usage and /siren binds (only when unable to type) are allowed.

Cam hack may only be used with admin approval and supervision.

Modifications that change the shape (height, width, etc) of GTA:SA's original skins and objects are forbidden.

SilentPatch is only allowed from version 30 and above.[/divbox][/list]`
    }

    if (rulesSelection.includes("6. Deathmatching")) {
      selectionArray += `[size=150][b]6. Deathmatching[/b][/size]
[list=none][divbox=#DDEBDF]Killing another person without a sufficient roleplay reason (deathmatching) is not allowed. Unnecessary provoking falls under this rule as well. Terrorism is strictly forbidden unless done with admin permission.

This also includes [b]revenge killing[/b] — when you respawn after being executed and then kill (or at least attempt to) the person who has just murdered you. Your In Character memory is wiped off everything that led up to your death when you are killed, so you should forget about your attacker.

Rules of Engagement must be followed by illegal factions: [url=http://forum.ls-rp.com/viewtopic.php?f=658&t=489386]Rules of Engagement (RoE)[/url][/divbox][divbox=#EBDDDD][b]Punishments:[/b] Anything from a kick to a ban depending on the severity and outcome of your actions.[/divbox][/list]
[list=none][divbox=#E3DDEB]With regards to revenge killing: if you are saved by the medics (FD) after being brutally wounded then you are allowed to continue the roleplay with your memory intact.

[b]If you have been killed and you do not know why, you may ask your killer for a clarification. If you are the killer and you are being asked that same question, you are required to provide your victim with an answer.[/b]

Only /invited members of official factions can do contract kills. This is to stop random civilians from advertising themselves as hitmen in order to randomly murder others for payment. Temporary exceptions to this sub-rule can be decided on by the Head of Factions.[/divbox][/list]`
    }

    if (rulesSelection.includes("7. Safezones")) {
      selectionArray += `[size=150][b]7. Safezones[/b][/size]
[list=none][divbox=#DDEBDF]You must not commit crime (holding up and general harassing is included) in highly populated areas or areas that would realistically be watched over by security forces. The locations covered by this rule are:

[list=none][*]Los Santos Airport
[*]City Hall in Pershing Square
[*]Banks (unless performing a bank robbery)
[*]Vehicle dealerships
[*]Verona Mall (inside only)
[*]Hospitals
[*]Los Santos University (including outside atrium and parking lot; [url=https://i.imgur.com/gZOP74c.png]reference[/url])
[*]Market Fire Station
[*]Courthouse in Market (including parking lots).
[*]Santa Maria fishing pier
[*]All PD/SD/LSFD stations and headquarters
[*]Prison lobby
[*]Ocean Docks Loading Bay (i.e. the ship used by truckers)
[*]DOJ buildings at Market & Rodeo
[*]The Governor's Estate (Verdant Bluffs)
[*]Ammunation stores (legal weapon shops)[/list][/divbox][divbox=#EBDDDD][b]Punishments:[/b] Anything from a verbal warning to an admin-jail depending on severity.[/divbox][/list]
[list=none][divbox=#E3DDEB]If the criminal roleplay leads to the area then you are allowed to continue.

For example: You are trying to kill a player and he runs into the mall from another location - you can follow and kill him if it is urgent. This should not be abused, as these locations (like PD/SD, City Hall) are dangerous. If the role-play can wait until a safer location, then it should.[/divbox][/list]`
    }

    if (rulesSelection.includes("8. Disgusting Roleplay")) {
      selectionArray += `[size=150][b]8. Disgusting Roleplay[/b][/size]
[list=none][divbox=#DDEBDF]Unless prior OOC permission is given by all parties involved, the following is strictly forbidden on this server:

[list=none][*]Rape
[*]Cannibalism
[*]Pedophilia
[*]Bestiality
[*]Necrophilia
[*]Dismemberment
[*]Sexual harassment (any type of sexual roleplay, including touching someone inappropriately)[/list]
If prior OOC permission is given by all parties involved, the roleplay must happen away from anybody else, where it will not potentially be interrupted. Subjecting others to see disgusting roleplay falls under this rule.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Temporary or permanent ban depending on severity.[/divbox][divbox=#E3DDEB]If you begin to feel uncomfortable during disgusting roleplay, even after giving permission, you're allowed to stop it immediately by informing all other players involved.[/divbox][/list]`
    }

    if (rulesSelection.includes("9. Robbing & Scamming")) {
      selectionArray += `[size=150][b]9. Robbing & Scamming[/b][/size]
[list=none][divbox=#DDEBDF][b]Robbing[/b] is defined as taking someone's possessions (like money) by force or threat of force. [b]Scamming[/b] is defined as hiring another person for a service (like prostitution), or agreeing to buy/sell a certain good (like a gun/drug) and then refusing to pay/give it. Robberies and scams must be done strictly In Character.

Characters participating in a robbery or scam must be [b]level 5[/b] or higher. Players that are lower than level 5 cannot be the sole target of a robbery or scam. If a player that is lower than level 5 is in a group with players of a higher level, they cannot have any assets taken during a robbery or scam but must participate in the roleplay surrounding it. If an administrator feels that a player lower than level 5 is taking unfair or malicious advantage of their exemption, they can punish at their own discretion.

You can rob a maximum of [b]$500[/b]. You can scam a maximum of [b]$50,000[/b]. There is no limit to how many weapons, drugs and cargo you can rob. You are not allowed to kill a player while or after robbing/scamming them unless they bring it upon themselves by showing attitude or non-compliance. If you have been robbed or scammed, you are allowed to rob back the things you have lost. Intentionally upping prices above the scamming limit to avoid being scammed is forbidden. You may not knowingly rob the same people more than once in a 2-hour period. [b]House, business and vehicle scams are forbidden.[/b]

Robberies must be performed in a realistic manner, including a sensible player motivation to be performing the robbery. Players shouldn't be performing high risk / little reward robberies, such as performing robberies with unrealistic equipment (such as expensive assault rifles or sports cars) or performing robberies in highly populated areas with many potential witnesses. Players should not be performing robberies unless their character has a reasonable reason to be doing so (e.g. a wealthy character wouldn't realistically need to perform stick-ups).

[b]You may not steal properties or abuse /furniture as a furniture designer.[/b] If someone has given you a property to allow freedom to /furniture design the house, you may not simply steal the property or use this to scam people.

[b]Legal casinos or betting shops may not scam players. This includes raffles.[/b] The maximum bet you can place in a legal betting business is $1,000,000 and all interactions must be role-played properly.

[b]Loaning and ILLEGAL gambling is done at your own risk[/b] and is not protected by the level requirements, money limits and scam restrictions described in this rule. Admins will not help you if you lend money to other people and they do not return it, or if your money gets stolen while you are gambling. If a person runs off with your money or gets banned, then the things with that person are gone. Only give your stuff to people you trust and only gamble if you are willing to accept a potential loss.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Anything from an admin-jail to a temporary ban depending on severity.[/divbox][/list]
[list=none][divbox=#E3DDEB]In order to keep a good balance between fun and confusion, [b]bank robberies[/b] require admin approval and supervision. You can ask for such a permission through /re. The rules for robbing a bank are as follows:

[list=none][*]There must be at least 30 PD and/or SD members online and on duty.
[*]You need to inform the admin of everything you have planned out before actually starting the heist.
[*]As soon as you brandish your gun in a bank, silent alarms go off and law enforcement is informed.
[*]There is no roof access to any bank inside of Los Santos.[/list][/divbox][/list]`
    }

    if (rulesSelection.includes("10. Namechange Rules")) {
      selectionArray += `[size=150][b]10. Namechange Rules[/b][/size]
[list=none][divbox=#DDEBDF]You may not namechange or Character Kill (CK) yourself when:

[list=none][*]You have scammed someone in the last 6 days.
[*]You have robbed someone in the last 48 hours.
[*]There is a [url=http://forum.ls-rp.com/viewforum.php?f=495]court case[/url] in progress involving you.
[*]The court has ordered you to do something and you still have not done it.
[*]You have accepted a loan within the last 14 days.[/list]
The evasion of In Character repercussions using any other Out Of Character methods is also forbidden. You are not allowed to transfer, sell or give away money and properties if there is a court case in progress involving you, or if the court has ordered you to do something and you still have not done it.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Temporary ban depending on severity, along with the removal of all illegally acquired goods.[/divbox][divbox=#E3DDEB]Exceptions to this rule can be decided on by the Head of Factions or the Lead Admin team whenever needed.[/divbox][/list]`
    }

    if (rulesSelection.includes("11. Prison Rules")) {
      selectionArray += `[size=150][b]11. Prison Rules[/b][/size]
      [list=none][divbox=#DDEBDF] 1 on 1 fights between inmates require 2+ Correctional Officers on duty. If no COs are online, you can request admin permission. The fight must be secluded (in a cell) with good reason to be granted.. Attacking a guard or starting a brawl (3+ people) requires 4+ guards on duty. Breaking in and out of prison requires admin permission, as well as 6+ guards on duty. To check the amount of guards on duty, use the command /onduty.[/divbox]
      [divbox=#EBDDDD][b]Punishments:[/b] Anything from a verbal warning to a ban depending on severity.[/divbox]
      [divbox=#E3DDEB]The prison has a CCTV camera system that covers 100% of the facility, except cell interiors (who leaves/enters cells is recorded). There is a control room watching over the prison CCTVs, so if no guards are present in an obviously monitored location and a violent situation happens, /pm a DOC member on duty.[/divbox][/list]`
    }

    if (rulesSelection.includes("12. Destroying Property")) {
      selectionArray += `[size=150][b]12. Destroying Property[/b][/size]
[list=none][divbox=#DDEBDF]You are required to have In-Game Lead Admin (+4) approval and supervision to burn/destroy a house or business. You can ask for such a permission through /re, but make sure you have a sufficient IC reason behind your plans. [color=#0040FF]If this involves two factions, factions may also request permission from Faction Management Council members as well as Level 4+ Admins.[/color]

This rule covers player-owned properties and businesses, and the destruction and temporary/permanent closure of those properties or businesses. The Los Santos Fire Department (Captain II+) and server administrators are able to create fires on any non-player owned building for fire department role-play and to justify a fire call-out scenario.

[color=#0040FF]If a faction wishes to trash/attack another faction's business to mimick property destruction but [u]not[/u] cause temporary/permanent closure of the business, they can request permission from a Level 2 Admin (from Faction Management) in-game at any time.[/color]

You cannot destroy a player's vehicle for no reason at all, and must have a reason or justification.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Admin-jail or a temporary ban depending on severity.[/divbox][/list]`
    }

    if (rulesSelection.includes("13. Legal Faction Rules")) {
      selectionArray += `[size=150][b]13. Legal Faction Rules[/b][/size]
[list=none][divbox=#DDEBDF]The following rules apply specifically to Legal Factions (e.g. LSPD & SASD):

[b][size=110]Tire Shooting[/size][/b]
Tire shooting is only to be used as an absolute last resort and is only permitted when:
[list=none][*]The pursued suspect(s) are actively shooting at you or others from a vehicle.
[*]The suspect(s) are immediately pursued after shooting at you or others at a scene.[/list]
There will be no other exceptions or special conditions to tire-shooting.

[size=110][b]Beanbag Shotgun[/b][/size]
[list=none][*]Drive-bying with a bean bag is not allowed under any circumstances.
[*]Players driving on motorcycles at [u]high speed[/u] may not be bean-bagged.
[*]If a suspect is brandishing a firearm (gun) in-hand, they may not be bean-bagged.
[*] [color=#0040FF]May not be used instead of a tazer to subdue a suspect during an unarmed foot pursuit.[/color][/list]
[size=110][b]Tazers[/b][/size]
[list=none][*]Should not be used on players that are in the actual water.
[*]If a suspect is brandishing a firearm (gun)in-hand, they may not be tazed.[/list]
[size=110][b]M4/Assault Rifle Usage[/b][/size]
M4/Assault Rifles may only be used by Legal Factions to/when:
[list=none][*] Return fire in an active drive-by, regardless of the suspect's drive-by weaponry.
[*] Match suspect(s) weaponry (MP5/AK47/M4/Rifle), only when [u]confirmed[/u] to be seen or visible.
[*] Damage non-compliant aircraft that is posing a threat to the public as a last resort.
[b]OR[/b]
[*] [color=#0040FF]The user of the assault rifle has the PD or SD Patrol Rifle Certification.[/color][/list]

These assault rifle restrictions cannot be manipulated or waived by any faction rank authority. If a faction wishes to further restrict the usage of M4s internally, that is permitted. Tactical team deployments (LSPD SWAT or SASD SED) are an exception to this rule, and may use M4s at their own discretion when deploying in the field.[/divbox][divbox=#EBDDDD][b]Punishments:[/b] Admin jail or a temporary ban depending on the severity of the rule breach.[/divbox][/list]`
    }

    if (rulesSelection.includes("14. Business Rules")) {
      selectionArray += `[size=150][b]14. Business Rules[/b][/size]
[list=none][divbox=#DDEBDF]The following rules apply specifically to businesses:

[b][size=110]1. Business robberies[/size][/b]
If you want to commit an armed robbery of an open business, you require [b]admin permission[/b].

[b][size=110]2. Shootings in businesses[/size][/b]
If you want to shoot a player inside an establishment business (club, bar, restaurant) when it is open and occupied by players, you [b]require admin permission[/b]. Businesses that are not open to the public, or "always open" (like fast-food outlets) are excluded from this rule and do not require admin permission.

[b][size=110]3. Realistic/sensible advertising[/size][/b]
You may no longer advertise "free drinks" as a selling point for your business and raffles/giveaways should not be done frequently. Casinos are excluded from the "raffles/giveaway" ruling.
 [/divbox][divbox=#EBDDDD][b]Punishments:[/b] Admin-jail or a temporary ban depending on severity.
Rule 3 may challenge your ownership or lease of a business.[/divbox][/list]`
    }

  });
  // add everything into quote marks
  finalRulesSelection = "[quote][justify]" + selectionArray + "[/justify][/quote]"
  console.log(finalRulesSelection);
}
