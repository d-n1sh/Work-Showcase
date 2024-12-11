using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class firstDoor : MonoBehaviour
{
    public gameControlScript gc;
    public GameObject DoorV6;
    bool unlock = false;
    public Animator doorAnim;

    // Start is called before the first frame update
    void Start()
    {
        doorAnim.Play("DoorPivot_Idle");
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    void OnTriggerEnter(Collider other)
    {
        if(other.CompareTag("key1")==true)
        {
            unlock = true;
            gc.PlayOpenSound();
            DoorV6.SetActive(false);
        }
        else
        {
            unlock = false;
            gc.PlayLockSound();
            DoorV6.SetActive(true);
        }
    }

    public void LockDoor()
    {
        gc.PlayLockSound();
    }

}
