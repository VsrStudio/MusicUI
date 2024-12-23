# MusicUI Plugin  
**MusicUI** is a PocketMine-MP plugin that allows players to input a song URL, adjust volume, and modify equalizer settings through a user-friendly UI.

## Features  
- **Custom Music UI**:  
  Players can use a form to:
  - Input a song URL (MP3 format).  
  - Adjust the volume (0-100).  
  - Set bass and treble levels (0-10).  

- **Permission Management**:  
  The command `/musicui` is available to all players by default.

- **Real-time Feedback**:  
  Players receive feedback after submitting their settings or if errors occur (e.g., invalid URL).

---

## Installation  
1. Download the plugin files and ensure they are placed in the `plugins/` directory of your PocketMine-MP server.  
2. Restart or reload the server to activate the plugin.

---

## Commands  
| Command   | Description             | Permission       | Default Access |
|-----------|-------------------------|------------------|----------------|
| `/musicui` | Opens the Music UI form | `musicui.command` | All players    |

---

## Permissions  
| Permission       | Description                     | Default Access |
|-------------------|---------------------------------|----------------|
| `musicui.command` | Allows access to the `/musicui` command | True           |

---

## How to Use  
1. Run the `/musicui` command in-game.  
2. Fill out the form:  
   - Enter a valid **MP3 URL**.  
   - Set the desired **volume**, **bass**, and **treble** levels.  
3. Submit the form.  
4. The plugin will process the input and display a message with the settings.

---

## Requirements  
- **PocketMine-MP**: API version 5.0.0.  
- A valid **MP3 URL** for songs.  

## Shields

[![](https://poggit.pmmp.io/shield.state/MusicUI)](https://poggit.pmmp.io/p/MusicUI)  
[![](https://poggit.pmmp.io/shield.api/MusicUI)](https://poggit.pmmp.io/p/MusicUI)
