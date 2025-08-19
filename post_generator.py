#! /bin/python3

import os
import datetime
from PIL import Image 
import spotipy
from spotipy.oauth2 import SpotifyClientCredentials

import cv2
import numpy as np
from skimage import io

from colorthief import ColorThief

BEGIN_TAG = "<!--USER BEGIN "
END_TAG = "<!--USER END "

ASSET_PREFIX = "/assets/renders/"
POST_PREFIX = "_posts/"
POST_SUFFIX = ".md"

TEMPLATE_POST = "./post_template.html"

IMG_KEY = "IMGSRC"
IMG_TKEY = "IMGTHMB"
IMG_NAME = "IMGNAME"
IMG_TIME = "IMGTIME"
IMG_ASPECT = "IMGASPECT"

POST_ID = "POSTID"

IMG_DOMCOL = "IMGCOL"
IMG_DOMCOL_GET = "domcol: "

IMG_MEDIA = "IMGMED"
IMG_MEDIA_GET = "spotisong: "

IMG_MEDIA_NAME = "SONGNAME"
IMG_MEDIA_ARTS = "ARTSNAME"
IMG_MEDIA_NAME_GET = "songname: "
IMG_MEDIA_ARTS_GET = "songautr: "

import cv2
import numpy as np
from skimage import io


#auth_manager = SpotifyClientCredentials()
#sp = spotipy.Spotify(auth_manager=auth_manager)


def parse_file(filename):
    content = ""
    try:
        with open(filename, "r") as f:
            content = f.read()
    except:
        print("cant open ",filename)
        return None, dict()
    
    domcol_line = None
    
    specific_dict = {}

    region = -1
    region_contents = dict()
    SAVE_ATTRIBUTES = [IMG_MEDIA,IMG_MEDIA_NAME,IMG_MEDIA_ARTS,IMG_DOMCOL]
    SAVE_ATTRIBUTES_GET = [IMG_MEDIA_GET, IMG_MEDIA_NAME_GET, IMG_MEDIA_ARTS_GET, IMG_DOMCOL_GET]
    
    for line in content.split("\n"):
        if line.startswith(BEGIN_TAG):
            region = int(line[len(BEGIN_TAG):len(BEGIN_TAG)+1])
        elif line.startswith(END_TAG):
            region = -1
        elif region !=  -1:
            region_contents[region] = region_contents.setdefault(region, "") + line +"\n"
        #if line.startswith(IMG_DOMCOL_GET):
        #    if(line[len(IMG_DOMCOL_GET):].count(IMG_DOMCOL)==0 and line[len(IMG_DOMCOL_GET):].count("#")==0):
        #        specific_dict[IMG_DOMCOL] = line[len(IMG_DOMCOL_GET):]
        #        #print("DC: ", domcol_line)  
        for x in range(len(SAVE_ATTRIBUTES)):
            if line.startswith(SAVE_ATTRIBUTES_GET[x]):
                if(line[len(SAVE_ATTRIBUTES_GET[x]):].count(SAVE_ATTRIBUTES[x])==0):
                    specific_dict[SAVE_ATTRIBUTES[x]] = line[len(SAVE_ATTRIBUTES_GET[x]):]
                    #print("spotisong: ", specific_dict[IMG_MEDIA])  
    
    #TODO: FIX!
    '''            
    if(specific_dict[IMG_MEDIA] != ""):
        try:
            track = sp.track(specific_dict[IMG_MEDIA])
            specific_dict[IMG_MEDIA_NAME] = track["name"]
            specific_dict[IMG_MEDIA_ARTS] = ", ".join([x["name"] for x in track["artists"]])   
        except:
            pass   
    '''
    
    return specific_dict, region_contents    
    
def generate_file(template, filename, post_dict, region_dict:dict ):
    with open(template, "r") as f:
        content = f.read()
    
    output_str = ""
    
    for key in post_dict.keys():
        content = content.replace(f"@{key}@", post_dict[key])
    
    for line in content.split("\n"):
        output_str+=line+"\n"    
        if line.startswith(BEGIN_TAG):
            region = int(line[len(BEGIN_TAG):len(BEGIN_TAG)+1])
            output_str += region_dict.get(region, "")[:-1]
        elif line.startswith(END_TAG):
            pass
        
    with open(filename, "w") as f:
        f.write(output_str)
    
    return output_str

def calculate_aspect(width: int, height: int) -> str:
    temp = 0

    def gcd(a, b):
        """The GCD (greatest common divisor) is the highest number that evenly divides both width and height."""
        return a if b == 0 else gcd(b, a % b)

    if width == height:
        return "1/1"

    if width < height:
        temp = width
        width = height
        height = temp

    divisor = gcd(width, height)

    x = int(width / divisor) if not temp else int(height / divisor)
    y = int(height / divisor) if not temp else int(width / divisor)

    return f"{x}/{y}"

def generate_post(filename:str):
    
    basename = filename
    filename = "."+ASSET_PREFIX+filename
    
    print(filename)
    
    post_name = filename.split("_")[-1]
    post_name = post_name[:post_name.rfind(".")].title()
    
    try:
        post_dt = datetime.datetime.strptime(basename[:10], "%Y_%m_%d")
    except:
        return None, None
    
    img = Image.open(filename)
    
    aspect_str = calculate_aspect(img.width, img.height)
    specific_dict = {}
    
    vertical = False
    if(img.height>=img.width):
        vertical = True    
        
    avg_col = (22,22,22)
    cols = []
#    img = Image.open("."+ASSET_PREFIX+"thumb/thumb-"+basename)
#    for y in [0, img.size[1]-1]:
#        for x in range(0, img.size[0]-1):
#            if(not vertical):
#                cols.append(img.getpixel((x,y)))
#            else:
#                cols.append(img.getpixel((y,x)))

#    try:
#        avg_col = [sum(y) / len(y) for y in zip(*cols)]
#    except:
#        avg_col = (sum(cols)/len(cols),sum(cols)/len(cols),sum(cols)/len(cols))
#    dominant = avg_col
    
#    print(avg_col)
    specific_dict[IMG_DOMCOL] = '^000000'
    #dominant = (22,22,22)
    #specific_dict[IMG_DOMCOL] = '^%02x%02x%02x' % (int(dominant[0]), int(dominant[1]), int(dominant[2]))
    #if(domcol):
    #    dominant = domcol
    #    specific_dict[IMG_DOMCOL] = domcol
    #else:
        #try:
            #color_thief = ColorThief("."+ASSET_PREFIX+"thumb/thumb-"+basename)
            #dominant = color_thief.get_color(quality=1)
            #specific_dict[IMG_DOMCOL] = '^%02x%02x%02x' % (int(dominant[0]), int(dominant[1]), int(dominant[2]))
        #except:
        #    pass
            
        
    specific_dict[IMG_KEY] = ASSET_PREFIX+basename
    specific_dict[IMG_TKEY] = ASSET_PREFIX+"thumb/thumb-"+basename
    specific_dict[IMG_NAME] = post_name
    specific_dict[IMG_TIME] = post_dt.strftime("%d %b %Y")
    specific_dict[IMG_ASPECT] = aspect_str
        
    return POST_PREFIX+post_dt.strftime("%Y-%m-%d-")+post_name.lower()+POST_SUFFIX, specific_dict
    print(post_dt, post_name)


    
filenames = next(os.walk("."+ASSET_PREFIX), (None, None, []))[2]
pid = 0
for fn in filenames:
    pid+=1
    if fn.endswith(("py", "html")):
        continue
    
    fn, sd1 = generate_post(fn)
    sd, rd = parse_file(fn) 
    if(sd == None):
        sd = dict()
    sd.update(sd1)
    sd[POST_ID] = str(pid)
    if(fn == None):
        continue
    
    #print(sd)
    generate_file(TEMPLATE_POST, fn, sd, rd)
    
    print("\n\n\nDONE!\n---\nNOTES:\n\ndont forget to capitalize DESIRE on 2025 08 12!")
    


#for i in *.jpg; do convert -thumbnail 160 $i /thumb/thumb-$i; done;
#for i in *.png; do convert -thumbnail 160 $i /thumb/thumb-$i; done;