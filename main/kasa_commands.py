import asyncio
from kasa import SmartPlug
from pprint import pformat as pf

plug = SmartPlug("192.168.2.27")
asyncio.run(plug.update())
print("Hardware: %s" % pf(plug.hw_info))
print("Full sysinfo: %s" % pf(plug.sys_info))
print("Current state: %s" % plug.is_on)
if plug.is_on == True:

    asyncio.run(plug.turn_off())
else:
    asyncio.run(plug.turn_on())