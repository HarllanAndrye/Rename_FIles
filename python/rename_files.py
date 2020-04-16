# -*- coding: utf-8 -*-

# Rename multiple files
# Putting a sequence of numbers at the beginning of the file name

import os

# Path where are the files that it will renames
path = "./my-files"

if os.path.isdir(path):
	# Loop over a list and get the index (using enumerate) and the value (name of file)
	for num, name in enumerate(os.listdir(path), start=1):
		new_name = str(num) + " - " + str(name)

		os.rename(path+"/"+name, path+"/"+new_name)
		print("File '" + name + "' changed to '" + new_name + "'")

