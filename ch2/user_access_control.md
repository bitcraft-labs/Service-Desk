# User Access Control

This section is going to discuss permissioning and assigning users to different security groups.

**Security Groups** are organized as two different layers, there are the containers which are just the names of the groups that different users will be added into, and then there are the actual permissions that are given to those groups. Most of the time the security groups will have the same level of permissions, the reason for duplication would be for assigning tickets to entire containers rather than single users.

Upon installation of the application the basic roles that will be available to assign users are:
- Super Admin (Global Access to Change Everything)
- Help Desk Staff (Full Access to Help Desk Portal)
- Help Desk Techs (Ability to Create and Modify Tickets)
- End Users (Everyone)

##Permissions
To date there are 5 different permissions that can be applied to either security groups or individual users. These are:
- **End User Portal** (which is by default for all users; without this the user is considered disabled)
- **Full Admin** (Super Users)
- **HD Staff Portal** (Access to basic ticketing)
- **Manage Templates** (For users who manage the different types of tickets that can be submitted)
- **Manage Users** (A managerial permissions that would allow someone to add/modify users)

##Security Groups

As either an admin or as someone in a security group with *Manage Users* permissions can access ``Admin > Settings > Security Groups`` and be able to add/modify security groups and assign the different permissions to those groups. These groups allow the people in those containers to be able to filter the ticket lists to see only that groups tickets as well as their own. Additionally if a ticket is assigned to that group, each person in that group will get an email notification. If assigned directly to a user in that group then only that user will get the notification.

In order to add someone to a particular security group, go to ``Admin > Settings > Users``, find the user you want to add to that group and click the *Group and Key* icon. Once that opens to its right, you can then select the radio button next to the group you'd like to add them to and click Apply.

Furthermore, if you don't want the person to be a part of that security group, you can just override their permissions below the group membership section and just allow them as you please.
