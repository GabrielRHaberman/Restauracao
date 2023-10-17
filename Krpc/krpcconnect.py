import krpc
import time
conn = krpc.connect()
vessel = conn.space_center.active_vessel

vessel.auto_pilot.target_pitch_and_heading(0, 90)
time.sleep(2)
vessel.control.throttle = 1
time.sleep(2)
vessel.control.activate_next_stage()