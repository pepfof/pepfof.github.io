import os

filenames = next(os.walk("."), (None, None, []))[2]  # [] if no file

pwd