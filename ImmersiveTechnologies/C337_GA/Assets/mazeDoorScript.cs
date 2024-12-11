using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class mazeDoorScript: MonoBehaviour
{
    public gameControlScript gc;
    public GameObject MazeDoorExit;
    bool unlock = false;

    // Start is called before the first frame update
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    void OnTriggerEnter(Collider other)
    {
        if (other.CompareTag("MazeKey") == true)
        {
            unlock = true;
            gc.PlayOpenSound();
            MazeDoorExit.SetActive(false);
        }
        else
        {
            unlock = false;
            gc.PlayLockSound();
            MazeDoorExit.SetActive(true);
        }
    }

    public void LockDoor()
    {
        gc.PlayLockSound();
    }

}
