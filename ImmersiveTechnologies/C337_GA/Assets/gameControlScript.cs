using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class gameControlScript : MonoBehaviour
{

    public AudioSource soundPlayer;
    public AudioClip clickSound;
    public AudioClip lockSound;
    public AudioClip openSound;
    public AudioClip glassSound;
    public AudioClip doSound;
    public AudioClip reSound;
    public AudioClip miSound;
    public AudioClip faSound;

    bool button1solved = false;
    bool button2solved = false;
    bool button3solved = false;
    bool button4solved = false;
    bool button5solved = false;
    bool button6solved = false;
    bool button7solved = false;

    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    public void PlayDoSound()
    {
        soundPlayer.PlayOneShot(doSound);
    }

    public void PlayReSound()
    {
        soundPlayer.PlayOneShot(reSound);
    }

    public void PlayMiSound()
    {
        soundPlayer.PlayOneShot(miSound);
    }

    public void PlayFaSound()
    {
        soundPlayer.PlayOneShot(faSound);
    }

    public void PlayGlassSound()
    {
        soundPlayer.PlayOneShot(glassSound);
    }

    public void PlayClickSound()
    {
        soundPlayer.PlayOneShot(clickSound);
    }

    public void PlayLockSound()
    {
        soundPlayer.PlayOneShot(lockSound);
    }

    public void PlayOpenSound()
    {
        soundPlayer.PlayOneShot(openSound);
    }

    public void SetButton1(bool set)
    {
        button1solved = set;
    }

    public bool GetButton1()
    {
        return button1solved;
    }

    public void SetButton2(bool set)
    {
        button2solved = set;
    }

    public bool GetButton2()
    {
        return button2solved;
    }

    public void SetButton3(bool set)
    {
        button3solved = set;
    }

    public bool GetButton3()
    {
        return button3solved;
    }

    public void SetButton4(bool set)
    {
        button4solved = set;
    }

    public bool GetButton4()
    {
        return button4solved;
    }

    public void SetButton5(bool set)
    {
        button5solved = set;
    }

    public bool GetButton5()
    {
        return button5solved;
    }

    public void SetButton6(bool set)
    {
        button6solved = set;
    }

    public bool GetButton6()
    {
        return button6solved;
    }

    public void SetButton7(bool set)
    {
        button7solved = set;
    }

    public bool GetButton7()
    {
        return button7solved;
    }

}
