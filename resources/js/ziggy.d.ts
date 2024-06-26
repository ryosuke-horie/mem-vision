/* This file is generated by Ziggy. */
declare module 'ziggy-js' {
  interface RouteList {
    "sanctum.csrf-cookie": [],
    "ignition.healthCheck": [],
    "ignition.executeSolution": [],
    "ignition.updateConfig": [],
    "profile.edit": [],
    "profile.update": [],
    "profile.destroy": [],
    "members.index": [],
    "members.create": [],
    "members.store": [],
    "members.edit": [
        {
            "name": "member_id"
        }
    ],
    "members.update": [
        {
            "name": "member_id"
        }
    ],
    "members.destroy": [
        {
            "name": "member_id"
        }
    ],
    "members.show": [
        {
            "name": "member_id"
        }
    ],
    "register": [],
    "login": [],
    "password.request": [],
    "password.email": [],
    "password.reset": [
        {
            "name": "token"
        }
    ],
    "password.store": [],
    "password.confirm": [],
    "password.update": [],
    "logout": []
}
}
export {};
